<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){

       $products = Product::all();
       return view('admin.homepage.Products.index', compact('products'));
   }

   public function create(){
       return view('admin.homepage.Products.create');
   }

   public function store(ProductsRequest $request){

       $fil_name  = $this->saveImage($request->image, 'backend/images/products');

       Product::create([
           'title_ar' =>$request->title_ar ,
           'title_en' => $request->title_en,
           'image' => $fil_name,
           'title_des_ar' => $request->title_des_ar,
           'title_des_en' => $request->title_des_en,
           'price_ar' => $request->price_ar,
           'price_en' => $request->price_en,
       ]);

       return redirect()->route('product.index');
   }

    protected function saveImage($image, $folder){
        $file_extension = $image->getClientOriginalExtension();
        $fil_name = time().'.'.$file_extension;
        $path = $folder;
        $image->move($path,$fil_name);
        return $fil_name;
    }


    public function edit($id){

        $product = Product::findorfail($id);
        return view('admin.homepage.Products.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $fil_name  = $this->saveImage($request->image, 'backend/images/products');

        $product = Product::findorfail($id);
        $product->update([
            'title_ar' =>$request->title_ar ,
            'title_en' => $request->title_en,
            'image' => $fil_name,
            'title_des_ar' => $request->title_des_ar,
            'title_des_en' => $request->title_des_en,
            'price_ar' => $request->price_ar,
            'price_en' => $request->price_en,
        ]);

        return redirect()->route('product.index');
    }

    public function destroy($id){

       Product::findorfail($id)->delete();
        return redirect()->route('product.index');
    }

}
