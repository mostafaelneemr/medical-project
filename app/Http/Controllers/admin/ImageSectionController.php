<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image_SectionRequest;
use App\Models\Image_Section;
use App\Models\Interior_Section;
use Illuminate\Http\Request;

class ImageSectionController extends Controller
{
      public function index(){
          $image_section = Image_Section::all();
          return view('admin.homepage.image_section.index', compact('image_section'));
      }

      public function create(){

          return view('admin.homepage.Image_section.create');
      }

      public function store(Image_SectionRequest $request){
          $fil_name  = $this->saveImage($request->image, 'backend/images/image.section');
          Image_Section::create([
              'image' => $fil_name,
              'title_ar' => $request->title_ar,
              'title_en' => $request->title_en,
              'button_ar' => $request->button_ar,
              'button_en' => $request->button_en
          ]);

          return redirect()->route('image.index');
      }
    protected function saveImage($image, $folder){
        $file_extension = $image->getClientOriginalExtension();
        $fil_name = time().'.'.$file_extension;
        $path = $folder;
        $image->move($path,$fil_name);
        return $fil_name;
    }

    public function edit($id){

       $image_section = Image_Section::findorfail($id);
       return view('admin.homepage.Image_section.edit', compact('image_section'));
    }

    public function update(Request $request, $id){
        $fil_name  = $this->saveImage($request->image, 'backend/images/image.section');

        $image_section = Image_Section::findorFail($id);
        $image_section->update([
            'image' => $fil_name,
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'button_ar' => $request->button_ar,
            'button_en' => $request->button_en
        ]);

        return redirect()->route('image.index');
    }


    public function destroy($id){

          Image_Section::findorFail($id)->delete();
        return redirect()->route('image.index');
    }

}
