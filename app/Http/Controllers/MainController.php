<?php

namespace App\Http\Controllers;

use App\Models\ContactRequests;
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
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
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
        $doctors = Doctors::limit(8)->get();
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
        $departments = Departments::paginate(8);
        return view('pages.departments', compact('departments'));
    }

    public function doctors()
    {
        $doctors = Doctors::paginate(8);
        return view('pages.doctors', compact('doctors'));
    }

    public function hospital($locale = null, $id)
    {
        $hospital = Hospitals::find($id);

        if(!$hospital) {
            abort(404);
        }

        $hospitalDoctors = Doctors::where('hospital_id',$hospital->id)->get();
        $hospitalDepartments = Departments::where('hospital_id',$hospital->id)->get();

        return view('pages.hospital', compact('hospital','hospitalDoctors','hospitalDepartments'));
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

        $otherDoctors = Doctors::where('id','!=',$id)->where('hospital_id',$doctor->hospital_id)->get();

        return view('pages.doctor', compact('doctor','otherDoctors'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactForm(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Insert data into ContactRequest model
            ContactRequests::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while sending your message.'
            ], 500);
        }
    }

    public function videoGallery()
    {
        $videos = VideoGallery::paginate(8);
        return view('pages.videos', compact('videos'));
    }

    public function blogs()
    {
        $blogs = Page::where('template','page')->paginate(8);
        return view('pages.blogs', compact('blogs'));
    }

    public function blog($locale = null, $id)
    {
        $blog = Page::find($id);

        if(!$blog) {
            abort(404);
        }

        $otherBlogs = Page::where('template','page')->where('id','!=',$id)->get();

        return view('pages.blog', compact('blog','otherBlogs'));
    }
}
