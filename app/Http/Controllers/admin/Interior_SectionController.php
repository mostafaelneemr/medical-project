<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Interior_SectionRequest;
use App\Models\Interior_Section;
use Illuminate\Http\Request;

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
            Interior_Section::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title], 
                'subtitle' => ['ar' => $request->subtitle_ar, 'en' => $request->subtitle], 
                'interior_title' => ['ar' => $request->interior_title_ar, 'en' => $request->interior_title], 
                'description' => ['ar' => $request->description_ar, 'en' => $request->description], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
                // 'icon' => $request->icon, 
            ]);

            $notification = array(
                'message' => 'Interior Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('interior_Section.index')->with($notification);
        } catch(\Exception $e) {

        }
    }

    public function edit($id){
        $interior_section = Interior_Section::findorFail($id);
        return view('admin.homepage.interior-section.edit', compact('interior_section'));
    }


    public function update(Request $request, $id){
        $fil_name  = $this->saveImage($request->image, 'backend/images/interior');

        $interior_section = Interior_Section::findorFail($id);

        $interior_section->update([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'subtitle_ar' => $request->subtitle_ar,
            'subtitle_en' => $request->subtitle_en,
            'image' => $fil_name,
            'interior_title_ar' => $request->interior_title_ar,
            'interior_title_en' => $request->interior_title_en,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'button_ar' => $request->button_ar,
            'button_en' => $request->button_en
        ]);
        return redirect()->route('interior.index');
    }

    public function destroy($id){
        Interior_Section::findorFail($id)->delete();
        return redirect()->route('interior.index');
    }
}
