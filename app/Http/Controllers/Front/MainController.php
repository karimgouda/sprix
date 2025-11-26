<?php

namespace App\Http\Controllers\Front;

use App\Models\Goal;
use App\Models\Build;
use App\Models\Skill;
use App\Models\Banner;
use App\Models\Leader;
use App\Models\Worker;
use App\Models\Company;
use App\Models\Discuss;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\Promise;
use App\Models\Quality;
use App\Models\AboutSlider;
use App\Models\AboutHistory;
use App\Models\HomeCategory;
use App\Models\ServicesMenu;
use Illuminate\Http\Request;
use App\Models\AboutStatistic;
use App\Models\Characteristic;
use App\Models\ServicesGallery;
use App\Models\ServicesTrouble;
use App\Models\ServicesSolution;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\PrivacyPolicy;
use App\Models\TermsCondition;
use App\Services\SEOFrontRenderService;

class MainController extends Controller
{
    public function __construct()
    {
        SEOFrontRenderService::generalRender();
    }

    public function home()
    {

        $slider = Feature::first();
        $about = AboutHistory::first();
        $services = ServicesMenu::get();
        $blogs = Goal::limit(3)->get();
        $faqs  = Characteristic::get();
        $teams = HomeCategory::limit(4)->get();
        $clients = Worker::get();
        return view('web.frontend.pages.home', get_defined_vars());
    }

    /**
     * About Page
     *
     * @return Response
     */
    public function about()
    {
        $banner     = Banner::where('page_type', 'about')->first();
        $about = AboutHistory::first();
        $teams = HomeCategory::limit(4)->get();
        return view('web.frontend.pages.about', get_defined_vars());
    }

    /**
     * Services Page
     *
     * @return Response
     */
    public function services()
    {
        $banner     = Banner::where('page_type', 'services')->first();
        $services = ServicesMenu::get();
        $clients = Worker::get();
        return view('web.frontend.pages.service', get_defined_vars());
    }

    public function blog()
    {
        $banner     = Banner::where('page_type', 'blog')->first();
        $blogs = Goal::get();
        $faqs  = Characteristic::get();
        return view('web.frontend.pages.blog', get_defined_vars());
    }
    /**
     * Contact Page
     *
     * @return Response
     */
    public function contact()
    {
        $banner     = Banner::where('page_type', 'contact_us')->first();
        return view('web.frontend.pages.contact',get_defined_vars());
    }

    /**
     * Store new contact
     *
     * @param ContactRequest $request
     * @return void
     */
    public function storeContact(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success', __("pages.contact.We've received your request successfully!"));
    }

    /**
     * Privacy & Policy Page
     *
     * @return Response
     */
    public function privacyPolicy()
    {
        $banner             = Banner::where('page_type', 'privacy_&_policy')->first();
        $privacyPolicies    = PrivacyPolicy::get();

        return view('web.frontend.pages.privacy_&_policy', compact('banner', 'privacyPolicies'));
    }

    /**
     * Terms & Conditions Page
     *
     * @return Response
     */
    public function termsConditions()
    {
        $banner = Banner::where('page_type', 'terms_&_conditions')->first();
        $termConditions = TermsCondition::get();

        return view('web.frontend.pages.terms_&_conditions', compact('banner', 'termConditions'));
    }

    public function serviceDetails($slug)
    {
        $service = ServicesMenu::where('slug->' . app()->getLocale(), $slug)->firstOrFail();
        $banner = Banner::where('page_type', 'services')->first();
        return view('web.frontend.pages.service_details', compact('service', 'banner'));
    }

    public function blogDetails($slug)
    {
        $blog = Goal::where('slug->' . app()->getLocale(), $slug)->firstOrFail();
        $banner = Banner::where('page_type', 'blog')->first();
        return view('web.frontend.pages.blog_details', compact('blog', 'banner'));
    }
}
