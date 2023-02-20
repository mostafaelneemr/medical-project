<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Image_Section;
use App\Models\Interior_Section;
use App\Models\Main_Section;
use App\Models\OurClient;
use App\Models\Product;
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
    
        $sliders = Slider::orderBy('id', 'DESC')->get();
        $main_sections = Main_Section::orderBy('id', 'DESC')->where('publish', 1)->get();
        $interiors = Interior_Section::orderBy('id' , 'DESC')->get();
        $images = Image_Section::orderBy('id', 'DESC')->where('publish', 1)->get();
        $products = Product::orderBy('id', 'DESC')->where('publish', 1)->get();
        $customers = Customer::orderBy('id', 'DESC')->where('publish', 1)->get();
        $clients = OurClient::orderBy('id', 'DESC')->get();
        return view('website.index', compact('sliders', 'main_sections', 'interiors', 'images', 'products', 'customers', 'clients'));
    }

}
