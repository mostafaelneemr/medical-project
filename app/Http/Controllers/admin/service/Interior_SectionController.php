<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Models\service\Interior_Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;


class Interior_SectionController extends Controller
{
    public function index(){
        $interiors = Interior_Section::all();
        return view('admin.homepage.interior-section.index', compact('interiors'));
    }

    public function create(){

        return view('admin.homepage.interior-section.create');
    }

    public function store(Request $request){
        try{
            $image = $request->file('icon');
            $name_gen = hexdec(uniqid()). '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(60,60)->save('upload/service/'. $name_gen);
            $save_url = 'upload/service/' . $name_gen;

            Interior_Section::create([
                'icon' => $save_url,
                'interior_title' => ['ar' => $request->interior_title_ar, 'en' => $request->interior_title], 
                'description' => ['ar' => $request->description_ar, 'en' => $request->description], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
            ]);

            $notification = array(
                'message' => 'Interior Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('interior_Section.index')->with($notification);

        } catch(\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id){
        $interiors = Interior_Section::findorFail($id);
        return view('admin.homepage.interior-section.edit', compact('interiors'));
    }

    public function update(Request $request, $id){
        try {
            $interiors = Interior_Section::findOrFail($id);
            $old_image = $request->old_image;

            if($request->file('icon')) {
                @unlink($old_image);
                $image = $request->file('icon');
                $name_gen = hexdec(uniqid()). '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(100,100)->save('upload/service/'. $name_gen);
                $save_url = 'upload/service/' . $name_gen;
                $interiors->update([ 'icon' => $save_url]);
            }
            $interiors->update([
                'interior_title' => ['ar' => $request->interior_title, 'en' => $request->interior_title],
                'description' => ['ar' => $request->description_ar, 'en' => $request->description],
                'button' => ['ar' => $request->button, 'en' => $request->button],
            ]);

            $notification = array(
                'message' => 'updated this section is success',
                'alert-type' => 'info',
            );

            return redirect::route('interior_Section.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function show($id){
        Interior_Section::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Section Interior Deleted Success',
            'alert-type' => 'error',
        );

        return redirect::back()->with($notification);
    }

    // public function head_create()
    // {
    //     return view('admin.homepage.Interior-section.index');
    // } 

    // public function head_store(Request $request)
    // {
    //     Interior_Section::create([
    //         'head' => ['en' => $request->head, 'ar' => $request->head_ar],
    //         'sub_head' => ['en' => $request->sub_head, 'ar' => $request->sub_head_ar],
    //     ]);

    //     return redirect::back();
    // }
}
