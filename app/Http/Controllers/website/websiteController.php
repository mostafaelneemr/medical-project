<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\about\About_Image;
use App\Models\about\help;
use App\Models\Customer;
use App\Models\home\{Image_Section, Product};
use App\Models\service\Interior_Section;
use App\Models\Main_Section;
use App\Models\OurClient;
use App\Models\service\cart;
use App\Models\service\service;
use App\Models\Slider;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    // public function slider()
    // {
    //     $sliders = Slider::orderBy('id', 'DESC')->where('publish', '1')->get();
    //     return view('layouts.website.master', compact('sliders'));
    // }

    public function home()
    {
        $sliders = Slider::orderBy('id', 'DESC')->where('slider_type', 'home')->where('publish', 1)->get();
        $main_sections = Main_Section::orderBy('id', 'DESC')->where('publish', 1)->get();
        $interiors = Interior_Section::orderBy('id' , 'DESC')->paginate(3);
        $images = Image_Section::orderBy('id', 'DESC')->where('publish', 1)->get();
        $products = Product::orderBy('id', 'DESC')->where('publish', 1)->get();
        $customers = Customer::orderBy('id', 'DESC')->where('publish', 1)->get();
        $clients = OurClient::orderBy('id', 'DESC')->paginate(4);
        return view('website.index', compact('sliders', 'main_sections', 'interiors', 'images', 'products', 'customers', 'clients'));
    }

    public function about()
    {
        $sliders = Slider::orderBy('id', 'DESC')->where('slider_type', 'about')->where('publish', 1)->get();
        $customers = Customer::orderBy('id', 'DESC')->where('publish', 1)->get();
        $helps = help::orderBy('id', 'DESC')->where('publish', 1)->get();
        $images = About_Image::orderBy('id', 'DESC')->get();
        return view('website.about', compact('sliders', 'customers', 'helps', 'images'));
    }

    public function service()
    {
        $sliders = Slider::orderBy('id', 'DESC')->where('slider_type', 'service')->where('publish', 1)->get();
        $services = service::orderBy('id', 'DESC')->where('publish', 1)->get();
        $interiors = Interior_Section::orderBy('id', 'DESC')->get();
        $clients = OurClient::orderBy('id', 'DESC')->get();
        $carts = cart::orderBy('id', 'DESC')->where('publish', 1)->get();
        return view('website.service', compact('interiors', 'clients', 'sliders', 'services', 'carts'));
    }

    public function contact()
    {
        $sliders = Slider::orderBy('id', 'DESC')->where('slider_type', 'contact')->where('publish', 1)->get();
        return view('website.contact', compact('sliders'));
    }

}
