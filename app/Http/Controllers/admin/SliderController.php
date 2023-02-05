<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlidersRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    CONST SLIDER_TYPE = 'home';
    
    // Function Index//
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.homepage.sliders.index', compact('sliders'));
    }

    // Function Create
    public function create()
    {
        return view('admin.homepage.sliders.create');
    }

    // Function Store//
    public function store(Request $request)
    {
        try{
            $image = $request->file('image_url');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1000)->save('upload/sliders/' . $name_gen);
            $save_url = 'upload/sliders/' . $name_gen;

            Slider::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'sub_title' => ['ar' => $request->sub_title_ar, 'en' => $request->sub_title], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
                'publish' => 1,
                'slider_type' => static::SLIDER_TYPE,
                'image_url' => $save_url,
            ]);

            $notification = array(
                'message' => 'slider Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('slider.index')->with($notification);
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
    public function show($id){
        dd($id);
    }

   // Function Edit//
    public function edit($id)
    {
        $slider = Slider::findorFail($id);
        return view('admin.homepage.sliders.edit', compact('slider'));
    }

   // Function Update//
    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('image_url')){
                unlink($old_image);
                $image = $request->file('image_url');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,1000)->save('upload/sliders/'.$name_gen);
                $save_url = 'upload/sliders/'.$name_gen;
            }

            Slider::findOrFail($id)->update([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'sub_title' => ['ar' => $request->sub_title_ar, 'en' => $request->sub_title], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
                'publish' => $request->publish,
                // 'image_url' => $save_url,
            ]);

            $notification = array(
                'message' => 'slider updated Successfully',
                'alert-type' => 'info',
            );
            return redirect()->route('slider.index')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    // Function Destroy//
   public function destroy($id){

       // half time from 9.30 to 10
   }

}


