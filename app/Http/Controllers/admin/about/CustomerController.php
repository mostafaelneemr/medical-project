<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('admin.about.customer.index', compact('customers'));
    }

    public function create(){

        return view('admin.about.customer.create');
    }

    public function store(Request $request){
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(50,50)->save('upload/about/'.$name_gen);
            $save_url = 'upload/about/'.$name_gen;

            Customer::create([
                'description' => ['en' =>$request->description, 'ar' => $request->description_ar],
                'customer_name' => ['en' =>$request->customer_name, 'ar' => $request->customer_name_ar],
                'title' => ['en' =>$request->title, 'ar' => $request->title_ar],
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Add Customer Is Success',
                'alert-type' => 'success',
            );

            return redirect::route('customers.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id){
        $customer = Customer::findorfail($id);
        return view('admin.about.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id){
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if ($request->file('image')) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid($image)). '.' .$image->getClientOriginalExtension();
                Image::make($image)->save('upload/about/'.$name_gen);
                $save_url = 'upload/about/'.$name_gen;
                Customer::findOrFail($id)->update([ 'image' => $save_url]);
            }

            Customer::findOrFail($id)->update([
                'description' => ['en' =>$request->description, 'ar' => $request->description_ar],
                'customer_name' => ['en' =>$request->customer_name, 'ar' => $request->customer_name_ar],
                'title' => ['en' =>$request->title, 'ar' => $request->title_ar],
                'publish' => $request->publish,
            ]);

            $notification = array(
                'message' => 'Update Customer Is Success',
                'alert-type' => 'info',
            );

            return redirect::route('customers.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function show($id){
        try {
            $customers = Customer::findOrFail($id);
            $img = $customers->image;
            @unlink($img);
    
            Customer::findOrFail($id)->delete();
    
            $notification = array(
                'message' => 'Customer Section Deleted is Success',
                'alert-type' => 'error',
            );
    
            return redirect::back()->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }
}
