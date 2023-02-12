<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Main_Section;
use App\Models\Slider;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function HomePage()
    {
        $sliders = Slider::orderBy('id', 'DESC')->where('publish', '1')->get();

        return view('layouts.website.master', compact('sliders'));
    }

    public function index(){
    
        $sliders = Slider::orderBy('id', 'DESC')->where('publish', '1')->get();
        $main_sections = Main_Section::orderBy('id', 'DESC')->get();
        return view('website.index', compact('sliders', 'main_sections'));
    }

}
