<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\FaqCategory;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Resource;

class PagesController extends Controller
{

    /**
     * screen reader page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        return view('layouts.frontend.pages.welcome');
    }

    /**
     * splash page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function splash()
    {
        return view('layouts.frontend.pages.splash');
    }

    /**
     * Home Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $blogList = Blog::latest()->take(4)->get();
        $resourceList = Resource::all();
        return view('layouts.frontend.pages.home', compact('blogList', 'resourceList'));
    }

    /**
     * About us Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('layouts.frontend.pages.about');
    }

    /**
     * Resource Center Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resource()
    {
        $resourcesList = DB::select("select * from resources where deleted_at is null order by created_at,updated_at");
        return view('layouts.frontend.pages.resource', compact('resourcesList'));
    }


    /**
     * News Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news()
    {
        $newsList = DB::select("select * from news where deleted_at is null order by created_at,updated_at");
        return view('layouts.frontend.pages.news', compact('newsList'));
    }

    /**
     * Grievances Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function grievances()
    {
        return view('layouts.frontend.pages.grievances');
    }

    /**
     * Contact us Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('layouts.frontend.pages.contact');
    }

    /**
     * FAQs Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function faqs()
    {
        $faqList = FaqCategory::with('categoryItems')->get();
        // dd($faqList->toArray());
        // $faqCategoryList = DB::select("select * from faq_categories where deleted_at is null order by created_at");
        // $faqList = DB::select("select * from faqs where deleted_at is null order by created_at");
        return view('layouts.frontend.pages.faqs', compact('faqList'));
    }


    /**
     * Feedback Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function feedback()
    {
        return view('layouts.frontend.pages.feedback');
    }

    /**
     * Blogs Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogs()
    {
        $blogList = DB::select("select * from blogs where deleted_at is null order by created_at DESC");
        return view('layouts.frontend.pages.blogs', compact('blogList'));
    }

    /**
     * Blog Details
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogDetails($permanent_link)
    {
        $blog = DB::select("select * from blogs where permanent_link = '$permanent_link'");
        // dd($blog);
        return view('layouts.frontend.pages.blog-details', compact('blog'));
    }


    /**
     * Gallery Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery()
    {
        $galleryList = Gallery::all();
        return view('layouts.frontend.pages.gallery', compact('galleryList'));
    }

    /**
     * Policy Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function policy()
    {
        return view('layouts.frontend.pages.policy');
    }

    /**
     * not_found Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function not_found()
    {
        return view('layouts.frontend.pages.not_found');
    }

    // class
}
