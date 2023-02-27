<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Models\about\About_Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class AboutImageController extends Controller
{
    public function index()
    {
        $images = About_Image::all();
        return view('admin.about.image.index', compact('images'));
    }

    public function create()
    {
        return view('admin.about.image.create');
    }

    public function store(Request $request)
    {
        try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(285, 285)->save('upload/about/' . $name_gen);
            $save_url = 'upload/about/' . $name_gen;

            About_Image::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Image Is Insert Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('image-section.index')->with($notification);
        }catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $images = About_Image::findOrFail($id);
        return view('admin.about.image.edit', compact('images'));
    }

    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if ($request->file('image')) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(285, 285)->save('upload/about/' . $name_gen);
                $save_url = 'upload/about/' . $name_gen;
                About_Image::findOrFail($id)->update(['image' => $save_url]);
            }

            About_Image::findOrFail($id)->update([
                'title' => ['en' => $request->title, 'ar' => $request->title_ar],
                // 'publish' => $request->publish,
            ]);

            $notification = array(
                'message' => 'Image Is Updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('image-section.index')->with($notification);
        
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $image = About_Image::findOrFail($id);
        $img = $image->image;
        @unlink($img);

        About_Image::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Delete Image Is success',
            'alert-type' => 'error',
        );

        return redirect::back()->with($notification);
    }
}
