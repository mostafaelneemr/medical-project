<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(){

        $customers = Customer::all();
        return view('admin.homepage.customer.index', compact('customers'));
    }

    public function create(){

        return view('admin.homepage.customer.create');
    }

    public function store(CustomerRequest $request){

        $fil_name  = $this->saveImage($request->image, 'backend/images/customer');

        Customer::create([
            'description_ar' =>$request->description_ar,
            'description_en' =>$request->description_en,
            'customer_name_ar' =>$request->customer_name_ar ,
            'customer_name_en' =>$request->customer_name_en,
            'image' =>$fil_name,
            'title_ar' =>$request->title_ar,
            'title_en' =>$request->title_en,
            'button_ar' =>$request->button_ar,
            'button_en' =>$request->button_en
        ]);

        return redirect()->route('customer.index');
    }

    protected function saveImage($image, $folder){
        $file_extension = $image->getClientOriginalExtension();
        $fil_name = time().'.'.$file_extension;
        $path = $folder;
        $image->move($path,$fil_name);
        return $fil_name;
    }


    public function edit($id){

        $customer = Customer::findorfail($id);
        return view('admin.homepage.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id){

        $fil_name  = $this->saveImage($request->image, 'backend/images/customer');
        $customer = Customer::findorfail($id);

        $customer->update([
            'description_ar' =>$request->description_ar,
            'description_en' =>$request->description_en,
            'customer_name_ar' =>$request->customer_name_ar ,
            'customer_name_en' =>$request->customer_name_en,
            'image' =>$fil_name,
            'title_ar' =>$request->title_ar,
            'title_en' =>$request->title_en,
            'button_ar' =>$request->button_ar,
            'button_en' =>$request->button_en
        ]);
        return redirect()->route('customer.index');
    }

    public function destroy($id){
      Customer::findorfail($id)->delete();
        return redirect()->route('customer.index');
    }
}
