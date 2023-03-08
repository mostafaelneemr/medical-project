<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class ServiceSliderController extends Controller
{
    CONST SLIDER_TYPE = 'service';
    
    public function index()
    {
        $sliders = Slider::where('slider_type', static::SLIDER_TYPE)->get();
        return view('admin.service.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.service.slider.create');
    }

    public function store(Request $request)
    {
        try{
            $image = $request->file('image_url');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1000)->save('upload/service/' . $name_gen);
            $save_url = 'upload/service/' . $name_gen;

            Slider::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'slider_type' => static::SLIDER_TYPE,
                'image_url' => $save_url,
            ]);

            $notification = array(
                'message' => 'slider Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('service-slider.index')->with($notification);
        }catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $slider = Slider::findorFail($id);
        return view('admin.service.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('image_url')){
                @unlink($old_image);
                $image = $request->file('image_url');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,1000)->save('upload/service/'.$name_gen);
                $save_url = 'upload/service/'.$name_gen;
                slider::findOrFail($id)->update(['image_url' => $save_url]);
            }

            Slider::findOrFail($id)->update([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'publish' => $request->publish,
            ]);

            $notification = array(
                'message' => 'slider updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('service-slider.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function show($id){
        $slider = Slider::findOrFail($id);
        $img = $slider->image_url;
        @unlink($img);

        Slider::findOrFail($id)->delete();

        $notification = array(
            'message' => 'delete slider success',
            'alert-type' => 'error',
        );

        return redirect::back()->with($notification);
    }
}










?>