<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OurClientRequest;
use App\Models\OurClient;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class OurClientController extends Controller
{
    public function index(){
        $clients = OurClient::all();
       return view('admin.homepage.ourClient.index', compact('clients'));
    }

    public function create(){
        return view('admin.homepage.ourClient.create');
    }

    public function store(Request $request){
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(270,270)->save('upload/homepage/' . $name_gen);
            $save_url = 'upload/homepage/' . $name_gen;

            OurClient::create([
                'image' => $save_url,
                'name' => ['en' => $request->name, 'ar' => $request->name_ar],
                'title_name' => ['en' => $request->title_name, 'ar' => $request->title_name_ar],
            ]);

            $notification = array(
                'message' => 'Add Client Is Success',
                'alert-type' => 'success',
            );
            
            return redirect::route('clients.index')->with($notification);

        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id){
        $ourClient = OurClient::findorfail($id);
        return view('admin.homepage.ourClient.edit', compact('ourClient'));
    }

    public function update(Request $request, $id){
        try {
            $id = $request->id;
            $old_image = $request->old_image;
    
            if ($request->file('image')) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid($image)). '.' .$image->getClientOriginalExtension();
                Image::make($image)->resize(270,270)->save('upload/homepage/'.$name_gen);
                $save_url = 'upload/homepage/'.$name_gen;
                OurClient::findOrFail($id)->update([ 'image' => $save_url ]);
            }
    
            OurClient::findOrFail($id)->update([
                'name' => ['en' => $request->name, 'ar' => $request->name_ar],
                'title_name' => ['en' => $request->title_name, 'ar' => $request->title_name_ar],
                'publish' => $request->publish,
            ]);
    
            $notification = array(
                'message' => 'Update Client Is Success',
                'alert-type' => 'info',
            );
    
            return redirect::route('clients.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        OurClient::findorfail($id)->delete();
        return redirect()->route('ourClient.index');
    }

}
