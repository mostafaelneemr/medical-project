<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main_SectionRequest;
use App\Models\Main_Section;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;


class Main_SectionController extends Controller
{
    public function index(){
        $main_section = Main_Section::all();
        return view('admin.homepage.main-section.index', compact('main_section'));
    }

    public function create(){
        return view('admin.homepage.main-section.create');
    }

    public function store(Request $request){
        try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(531, 670)->save('upload/homepage/' . $name_gen);
            $save_url = 'upload/homepage/' . $name_gen;

            Main_Section::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'subtitle' => ['ar' => $request->subtitle_ar, 'en' => $request->subtitle], 
                'description' => ['ar' => $request->description_ar, 'en' => $request->description], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'main-section Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('main-section.index')->with($notification);
        }catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id){
        $main_section = Main_Section::findorFail($id);
        return view('admin.homepage.main-section.edit', compact('main_section'));
    }

    public function update(Request $request, $id){
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('image')){
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,1000)->save('upload/homepage/'.$name_gen);
                $save_url = 'upload/homepage/'.$name_gen;
                Main_Section::findOrFail($id)->update(['image' => $save_url]);
            }

            Main_Section::findOrFail($id)->update([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'subtitle' => ['ar' => $request->subtitle_ar, 'en' => $request->subtitle], 
                'description' => ['ar' => $request->description_ar, 'en' => $request->description], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
                'publish' => $request->publish,
            ]);

            $notification = array(
                'message' => 'main section updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('main-section.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function show($id){
        $slider = Main_Section::findOrFail($id);
        $img = $slider->image;
        @unlink($img);

        Main_Section::findOrFail($id)->delete();

        $notification = array(
            'message' => 'delete slider success',
            'alert-type' => 'error',
        );

        return redirect::back()->with($notification);
    }
}
