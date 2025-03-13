<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Doctors;
use App\Models\Faqs;
use App\Models\Features;
use App\Models\Hospitals;
use App\Models\Page;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Sliders;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * Display the home page.
     *
     * @return View
     */
    public function dashboard(Request $request)
    {
        $sliders = Sliders::all();
        $aboutUs = Page::where('slug','about-us')->first();
        $features = Features::first();
        $services = Services::all();
        $departments = Departments::all();
        $testimonials = Testimonials::all();
        $doctors = Doctors::all();
        $faqs = Faqs::all();
        $hospitals = Hospitals::all();

        return view('pages.home',['sliders' => $sliders, 'aboutUs' => $aboutUs,'features' => $features, 'services' => $services,'departments' => $departments,'testimonials' => $testimonials,'doctors' => $doctors,'faqs' => $faqs, 'hospitals' => $hospitals]);
    }

    public function page($locale = null, $slug = null)
    {
        if (is_null($slug)) {
            abort(404);
        }

        $page = Page::where('slug', $slug)->first();

        if (!$page) {
            abort(404);
        }

        return view('pages.page', ['page' => $page]);
    }

    public function hospitals()
    {
        $hospitals = Hospitals::paginate(6);
        return view('pages.hospitals', compact('hospitals'));
    }

    public function services()
    {
        $services = Services::paginate(6);
        return view('pages.services', compact('services'));
    }

    public function departments()
    {
        $departments = Departments::paginate(6);
        return view('pages.departments', compact('departments'));
    }

    public function doctors()
    {
        $doctors = Doctors::paginate(6);
        return view('pages.doctors', compact('doctors'));
    }

    public function hospital($locale = null, $id)
    {
        $hospital = Hospitals::find($id);

        if(!$hospital) {
            abort(404);
        }

        return view('pages.hospital', compact('hospital'));
    }

    public function department($locale = null, $id)
    {
        $department = Departments::find($id);

        if(!$department) {
            abort(404);
        }

        $otherDepartments = Departments::where('id','!=',$id)->get();

        return view('pages.department', compact('department','otherDepartments'));
    }

    public function service($locale = null, $id)
    {
        $service = Services::find($id);

        if(!$service) {
            abort(404);
        }

        $otherServices = Services::where('id','!=',$id)->get();

        return view('pages.service', compact('service','otherServices'));
    }

    public function doctor($locale = null, $id)
    {
        $doctor = Doctors::find($id);

        if(!$doctor) {
            abort(404);
        }

        $otherDoctors = Doctors::where('id','!=',$id)->get();

        return view('pages.doctor', compact('doctor','otherDoctors'));
    }
}
