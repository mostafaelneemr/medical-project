<?php

namespace App\Http\Controllers\admin\about;

use App\Models\about\help;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;


class HelpController extends Controller
{
    public function index()
    {
        $helps = help::all();
        return view('admin.about.help.index', compact('helps'));
    }

    public function create()
    {
        return view('admin.about.help.create');
    }

    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(550,370)->save('upload/about/'.$name_gen);
            $save_url = 'upload/about/'.$name_gen;

            help::create([
                'title' => ['en' =>$request->title, 'ar' => $request->title_ar],
                'sub_title' => ['en' =>$request->sub_title, 'ar' => $request->sub_title_ar],
                'head' => ['en' =>$request->head, 'ar' => $request->head_ar],
                'description' => ['en' =>$request->description, 'ar' => $request->description_ar],
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Add Help Section Is Success',
                'alert-type' => 'success',
            );

            return redirect::route('help-section.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $help = help::findOrFail($id);
        return view('admin.about.help.edit', compact('help'));
    }

    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if ($request->file('image')) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
                Image::make($image)->resize(550,370)->save('upload/about/'.$name_gen);
                $save_url = 'upload/about/'.$name_gen;
                help::findOrFail($id)->update([ 'image' => $save_url]);
            }

            help::findOrFail($id)->update([
                'title' => ['en' =>$request->title, 'ar' => $request->title_ar],
                'sub_title' => ['en' =>$request->sub_title, 'ar' => $request->sub_title_ar],
                'head' => ['en' =>$request->head, 'ar' => $request->head_ar],
                'description' => ['en' =>$request->description, 'ar' => $request->description_ar],
                'publish' => $request->publish,
            ]);

            $notification = array(
                'message' => 'Update Help Section Is Success',
                'alert-type' => 'info',
            );

            return redirect::route('help-section.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        try {
            $customers = help::findOrFail($id);
            $img = $customers->image;
            @unlink($img);
    
            help::findOrFail($id)->delete();
    
            $notification = array(
                'message' => 'Help Section Deleted is Success',
                'alert-type' => 'error',
            );
    
            return redirect::back()->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }
}
