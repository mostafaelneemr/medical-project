<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Models\service\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class CartController extends Controller
{
    public function index()
    {
        $carts = cart::all();
        return view('admin.service.cart.index', compact('carts'));
    }

    public function create()
    {
        return view('admin.service.cart.create');
    }

    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(480, 480)->save('upload/service/' . $name_gen);
            $save_url = 'upload/service/' . $name_gen;

            cart::create([
                'title' => ['en' => $request->title, 'ar' => $request->title_ar ],
                'description' => ['en' => $request->description, 'ar' => $request->description_ar ],
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Cart Insert Is Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('service-cart.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $carts = cart::findOrFail($id);
        return view('admin.service.cart.edit', compact('carts'));
    }

    public function update(Request $request,$id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if ($request->file('image')) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(480, 480)->save('upload/service/' . $name_gen);
                $save_url = 'upload/service/' . $name_gen;
                cart::findOrFail($id)->update(['image' => $save_url]);
            }

            cart::findOrFail($id)->update([
                'title' => ['en' => $request->title, 'ar' => $request->title_ar ],
                'description' => ['en' => $request->description, 'ar' => $request->description_ar ],
                'publish' => $request->publish,
            ]);

            $notification = array(
                'message' => 'Cart Update Is Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('service-cart.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
       }
    }

    public function destroy(cart $cart)
    {
        //
    }
}


















?>
