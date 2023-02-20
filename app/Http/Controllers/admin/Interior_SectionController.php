<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Interior_Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
                'head' => ['ar' => $request->head_ar, 'en' => $request->head], 
                'sub_head' => ['ar' => $request->sub_head_ar, 'en' => $request->sub_head], 
                'interior_title' => ['ar' => $request->interior_title_ar, 'en' => $request->interior_title], 
                'description' => ['ar' => $request->description_ar, 'en' => $request->description], 
                'button' => ['ar' => $request->button_ar, 'en' => $request->button], 
                'icon' => $request->icon, 
            ]);

            $notification = array(
                'message' => 'Interior Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('interior_Section.index')->with($notification);

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
            $interiors->update([
                'head' => ['ar' => $request->head_ar , 'en' => $request->head],
                'sub_head' => ['ar' => $request->sub_head_ar, 'en' => $request->sub_head],
                'interior_title' => ['ar' => $request->interior_title, 'en' => $request->interior_title],
                'description' => ['ar' => $request->description_ar, 'en' => $request->description],
                'button' => ['ar' => $request->button, 'en' => $request->button],
                // 'icon' => $request->icon,
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

    public function destroy($id){
        return $id;
    }
}
