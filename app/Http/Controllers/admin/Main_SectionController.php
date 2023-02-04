<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main_SectionRequest;
use App\Models\Main_Section;
use Illuminate\Http\Request;

class Main_SectionController extends Controller
{

    public function index(){

        $main_section = Main_Section::all();
        return view('admin.homepage.main-section.index', compact('main_section'));
    }

    public function create(){

        return view('admin.homepage.main-section.create');
    }



    public function store(Main_SectionRequest  $request){

        $fil_name  = $this->saveImage($request->image, 'backend/images/main');

       Main_Section::create([
           'image' => $fil_name,
           'title_ar' => $request->title_ar,
           'title_en' => $request->title_en,
           'subtitle_ar' => $request->subtitle_ar ,
           'subtitle_en' => $request->subtitle_en,
           'title_details_ar' => $request->title_details_ar,
           'title_details_en' => $request->title_details_en,
           'button_ar'=> $request->button_ar,
           'button_en' => $request->button_en,
       ]);

        return redirect()->route('main.index');
    }
    protected function saveImage($image, $folder){
        $file_extension = $image->getClientOriginalExtension();
        $fil_name = time().'.'.$file_extension;
        $path = $folder;
        $image->move($path,$fil_name);
        return $fil_name;
    }




    public function edit($id){

        $main_section = Main_Section::findorFail($id);
        return view('admin.homepage.main-section.edit', compact('main_section'));
    }


   public function update(Request $request, $id){

       $fil_name  = $this->saveImage($request->image, 'backend/images/main');

         $main = Main_Section::findorFail($id);
         $main->update([
             'image' => $fil_name,
             'title_ar' => $request->title_ar,
             'title_en' => $request->title_en,
             'subtitle_ar' => $request->subtitle_ar ,
             'subtitle_en' => $request->subtitle_en,
             'title_details_ar' => $request->title_details_ar,
             'title_details_en' => $request->title_details_en,
             'button_ar'=> $request->button_ar,
             'button_en' => $request->button_en,
         ]);

       return redirect()->route('main.index');
   }


     public function destroy($id){

        Main_Section::findorFail($id)->delete();

         return redirect()->route('main.index');
     }



}
