<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Models\service\service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    public function index()
    {
        $services = service::all();
        return view('admin.service.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.service.create');
    }

    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(530, 400)->save('upload/service/' . $name_gen);
            $save_url = 'upload/service/' . $name_gen;

            Service::create([
                'head' => ['en' => $request->head, 'ar' => $request->head_ar ],
                'title' => ['en' => $request->title, 'ar' => $request->title_ar ],
                'description' => ['en' => $request->description, 'ar' => $request->description_ar ],
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Service Insert Is Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('service.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return view('admin.service.service.edit', compact('services'));
    }

    public function update(Request $request,$id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if ($request->file('image')) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(530, 400)->save('upload/service/' . $name_gen);
                $save_url = 'upload/service/' . $name_gen;
                service::findOrFail($id)->update(['image' => $save_url]);
            }

            Service::findOrFail($id)->update([
                'head' => ['en' => $request->head, 'ar' => $request->head_ar ],
                'title' => ['en' => $request->title, 'ar' => $request->title_ar ],
                'description' => ['en' => $request->description, 'ar' => $request->description_ar ],
                'publish' => $request->publish,
            ]);

            $notification = array(
                'message' => 'Service Update Is Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('service.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
       }
    }

    public function show(service $service)
    {
        //
    }
}





















?>