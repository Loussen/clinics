<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Doctors;
use App\Models\Faqs;
use App\Models\Features;
use App\Models\Page;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Sliders;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * Display the home page.
     *
     * @return View
     */
    public function dashboard()
    {
        $sliders = Sliders::all();
        $settings = Settings::first();
        $siteServices = json_decode($settings->site_services,true);
        $aboutUs = Page::where('template','about_us')->first();
        $features = Features::first();
        $services = Services::all();
        $departments = Departments::all();
        $testimonials = Testimonials::all();
        $doctors = Doctors::all();
        $faqs = Faqs::all();
        $gallery = json_decode($settings->gallery,true);

        return view('pages.home',['sliders' => $sliders, 'siteServices' => $siteServices, 'aboutUs' => $aboutUs,'features' => $features, 'services' => $services,'departments' => $departments,'testimonials' => $testimonials,'doctors' => $doctors,'faqs' => $faqs,'gallery' => $gallery]);
    }
}
