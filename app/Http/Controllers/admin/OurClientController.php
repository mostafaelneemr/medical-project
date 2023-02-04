<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OurClientRequest;
use App\Models\OurClient;
use Illuminate\Http\Request;

class OurClientController extends Controller
{
    public function index(){


        $ourClient = OurClient::all();
       return view('admin.homepage.ourClient.index', compact('ourClient'));
    }

    public function create(){

        return view('admin.homepage.ourClient.create');
    }


    public function store(OurClientRequest $request){
        $fil_name  = $this->saveImage($request->image, 'backend/images/ourClient');
        OurClient::create([
            'title_ar' =>$request->title_ar ,
            'title_en' =>$request->title_en,
            'image' =>$fil_name,
            'company_name_ar' =>$request->company_name_ar,
            'company_name_en' =>$request->company_name_en
        ]);

        return redirect()->route('ourClient.index');
    }

    protected function saveImage($image, $folder){
        $file_extension = $image->getClientOriginalExtension();
        $fil_name = time().'.'.$file_extension;
        $path = $folder;
        $image->move($path,$fil_name);
        return $fil_name;
    }


    public function edit($id){

        $ourClient = OurClient::findorfail($id);
        return view('admin.homepage.ourClient.edit', compact('ourClient'));
    }

    public function update(Request $request, $id){
        $fil_name  = $this->saveImage($request->image, 'backend/images/ourClient');

        $ourClient = OurClient::findorfail($id);
        $ourClient->update([
            'title_ar' =>$request->title_ar,
            'title_en' =>$request->title_en,
            'image' =>$fil_name,
            'company_name_ar' =>$request->company_name_ar,
            'company_name_en' =>$request->company_name_en
        ]);
        return redirect()->route('ourClient.index');
    }

    public function destroy($id){

        OurClient::findorfail($id)->delete();
        return redirect()->route('ourClient.index');
    }

}
