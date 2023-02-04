<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewUpdateRequest;
use App\Models\new_Update;
use Illuminate\Http\Request;

class NewUpdateController extends Controller
{

    public function index(){

        $newUpdates = new_Update::all();
        return view('admin.homepage.newUpdate.index', compact('newUpdates'));
    }

   public function create(){

       return view('admin.homepage.newUpdate.create');
   }

   public function store(NewUpdateRequest $request){
       $fil_name  = $this->saveImage($request->image, 'backend/images/newUpdate');

        new_Update::create([
            'title_ar' =>$request->title_ar,
            'title_en' =>$request->title_en,
            'image' =>$fil_name,
            'date' =>$request->date,
            'description_ar' =>$request->description_ar,
            'description_en' =>$request->description_en,
        ]);

        return redirect()->route('newUpdate.index');
   }
    protected function saveImage($image, $folder){
        $file_extension = $image->getClientOriginalExtension();
        $fil_name = time().'.'.$file_extension;
        $path = $folder;
        $image->move($path,$fil_name);
        return $fil_name;
    }

    public function edit($id){

        $newUpdates = new_Update::findorfail($id);
        return view('admin.homepage.newUpdate.edit', compact('newUpdates'));
    }

    public function update(Request $request, $id){

        $fil_name  = $this->saveImage($request->image, 'backend/images/newUpdate');

        $newUpdates = new_Update::findorfail($id);
        $newUpdates->update([
            'title_ar' =>$request->title_ar,
            'title_en' =>$request->title_en,
            'image' =>$fil_name,
            'date' =>$request->date,
            'description_ar' =>$request->description_ar,
            'description_en' =>$request->description_en,
        ]);
        return redirect()->route('newUpdate.index');
    }

    
    public function destroy($id){
        new_Update::findorfail($id)->delete();
        return redirect()->route('newUpdate.index');
    }

}
