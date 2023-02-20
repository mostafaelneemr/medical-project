<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image_Section;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class ImageSectionController extends Controller
{
    public function index(){
        $images = Image_Section::all();
        return view('admin.homepage.image_section.index', compact('images'));
    }

    public function create(){
        return view('admin.homepage.Image_section.create');
    }

    public function store(Request $request){
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(480, 480)->save('upload/homepage/' . $name_gen);
            $save_url = 'upload/homepage/' . $name_gen;

            Image_Section::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title],
                'button' => ['ar' => $request->button_ar, 'en' => $request->button],
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Image Inserted Successfully',
                'alert-type' => 'success',
            );

            return redirect::route('images.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id){
       $images = Image_Section::findorfail($id);
       return view('admin.homepage.Image_section.edit', compact('images'));
    }

    public function update(Request $request){

        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('image')){
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(480,480)->save('upload/homepage/'.$name_gen);
                $save_url = 'upload/homepage/'.$name_gen;
                Image_Section::findOrFail($id)->update(['image' => $save_url]);
            }

            Image_Section::findOrFail($id)->update([
                'title' => ['en' => $request->title, 'ar' => $request->title_ar],
                'button' => ['en' => $request->button, 'ar' => $request->button_ar],
            ]);

            $notification = array(
                'message' => 'image update success',
                'alert-type' => 'info',
            );

            return redirect::route('images.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        
    }

}
