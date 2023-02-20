<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(){
       $products = Product::all();
       return view('admin.homepage.Products.index', compact('products'));
    }

    public function create(){
       return view('admin.homepage.Products.create');
    }

    public function store(Request $request){
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()). '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(356,475)->save('upload/homepage/'. $name_gen);
            $save_url = 'upload/homepage/' . $name_gen;

            Product::create([
                'title' => ['en' => $request->title, 'ar' => $request->title_ar],
                'price' => $request->price,
                'image' => $save_url,
            ]);

            $notifucation = array(
                'message' => 'Add Product Is Success',
                'alert-type' => 'success',
            );

            return redirect::route('products.index')->with($notifucation);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id){
        $product = Product::findorfail($id);
        return view('admin.homepage.Products.edit', compact('product'));
    }

    public function update(Request $request, $id){
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if ($request->file('image')) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid($image)). '.' .$image->getClientOriginalExtension();
                Image::make($image)->resize(356,475)->save('upload/homepage/'.$name_gen);
                $save_url = 'upload/homepage/'.$name_gen;
                Product::findOrFail($id)->update(['image' => $save_url]);
            }

            Product::findOrFail($id)->update([
                'title' => ['en' => $request->title, 'ar' => $request->title_ar],
                'price' => $request->price,
                'publish' => $request->publish,
            ]);

            $notifucation = array(
                'message' => 'Update Product Is Success',
                'alert-type' => 'info',
            );

            return redirect::route('products.index')->with($notifucation);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id){

       Product::findorfail($id)->delete();
        return redirect()->route('product.index');
    }
}
