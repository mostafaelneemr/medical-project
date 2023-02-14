<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {
        $settings = setting::all();
        return view('admin.settings.index', compact('settings'))->render();
    }
    
    public function update(Request $request){
        try {
            foreach ($request->all() as $name => $value) {
                if ($name != '_method' && $name != '_token') {
                    $setting = setting::whereName($name)->first();
    
                    $setting->update([ 'value' => $value, ]);
                }
            }

            $notification = array(
                'message' => 'updated is success',
                'alert-type' => 'info'
            );
            return redirect()->route('settings')->with($notification);
        
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }

    }
}

