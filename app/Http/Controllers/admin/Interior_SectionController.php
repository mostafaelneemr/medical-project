<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Interior_SectionRequest;
use App\Models\Interior_Section;
use Illuminate\Http\Request;

class Interior_SectionController extends Controller
{

    public function index(){
        $interior_section = Interior_Section::all();
        return view('admin.homepage.interior-section.index', compact('interior_section'));
    }

    public function create(){

        return view('admin.homepage.interior-section.create');
    }

    public function store(Interior_SectionRequest $request){

        $fil_name  = $this->saveImage($request->image, 'backend/images/interior');

        Interior_Section::create([
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

    protected function saveImage($image, $folder){
        $file_extension = $image->getClientOriginalExtension();
        $fil_name = time().'.'.$file_extension;
        $path = $folder;
        $image->move($path,$fil_name);
        return $fil_name;
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
