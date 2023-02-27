<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlidersRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;


class SliderController extends Controller
{
    CONST SLIDER_TYPE = 'home';
    
    public function index()
    {
        $sliders = Slider::where('slider_type', 'home')->get();
        return view('admin.homepage.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.homepage.sliders.create');
    }

    public function store(Request $request)
    {
        try{
            $image = $request->file('image_url');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1000)->save('upload/homepage/' . $name_gen);
            $save_url = 'upload/homepage/' . $name_gen;

            Slider::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
                'slider_type' => static::SLIDER_TYPE,
                'image_url' => $save_url,
            ]);

            $notification = array(
                'message' => 'slider Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('slider.index')->with($notification);
        }catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $slider = Slider::findorFail($id);
        return view('admin.homepage.sliders.edit', compact('slider'));
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
                Image::make($image)->resize(1920,1000)->save('upload/homepage/'.$name_gen);
                $save_url = 'upload/homepage/'.$name_gen;
                slider::findOrFail($id)->update(['image_url' => $save_url]);
            }

            Slider::findOrFail($id)->update([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
                'publish' => $request->publish,
            ]);

            $notification = array(
                'message' => 'slider updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('slider.index')->with($notification);
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


