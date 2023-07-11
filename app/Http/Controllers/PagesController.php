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
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'home')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        // blogs list
        $blogList = Blog::latest()->take(4)->get();
        // resources list
        $resourceList = Resource::all();
        return view('layouts.frontend.pages.home', compact('blogList', 'resourceList','seo'));
    }

    /**
     * About us Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'about')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        return view('layouts.frontend.pages.about',compact('seo'));
    }

    /**
     * Resource Center Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resource()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'resource')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        $resourcesList = DB::select("select * from resources where deleted_at is null order by created_at,updated_at");
        return view('layouts.frontend.pages.resource', compact('resourcesList','seo'));
    }


    /**
     * News Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'news')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        $newsList = DB::select("select * from news where deleted_at is null order by created_at,updated_at");
        return view('layouts.frontend.pages.news', compact('newsList','seo'));
    }

    /**
     * Grievances Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function grievances()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'grievance')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        return view('layouts.frontend.pages.grievances',compact('seo'));
    }

    /**
     * Contact us Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'contact')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        return view('layouts.frontend.pages.contact',compact('seo'));
    }

    /**
     * FAQs Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function faqs()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'faqs')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        $faqList = FaqCategory::with('categoryItems')->get();
        // dd($faqList->toArray());
        // $faqCategoryList = DB::select("select * from faq_categories where deleted_at is null order by created_at");
        // $faqList = DB::select("select * from faqs where deleted_at is null order by created_at");
        return view('layouts.frontend.pages.faqs', compact('faqList','seo'));
    }


    /**
     * Feedback Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function feedback()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'feedback')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        return view('layouts.frontend.pages.feedback',compact('seo'));
    }

    /**
     * Blogs Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogs()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'blog')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        $blogList = DB::select("select * from blogs where deleted_at is null order by created_at DESC");
        return view('layouts.frontend.pages.blogs', compact('blogList','seo'));
    }

    /**
     * Blog Details
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogDetails($permanent_link)
    {
                $blog = DB::select("select * from blogs where permanent_link = '$permanent_link'");
        if(count($blog)==1){
            return view('layouts.frontend.pages.blog-details', compact('blog'));
        } else {
            return $this->not_found();
        }
    }


    /**
     * Gallery Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'gallery')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        $galleryList = Gallery::all();
        return view('layouts.frontend.pages.gallery', compact('galleryList','seo'));
    }

    /**
     * Policy Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function policy()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'policy')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        return view('layouts.frontend.pages.policy',compact('seo'));
    }

    /**
     * not_found Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function not_found()
    {
        // SEO content
        $seo = DB::table('s_e_o_s')->select('keywords', 'description')->where('page', 'not_found')->limit(1)->get();
        if(count($seo)==0){
            $seo=collect(array((object)['keywords'=>'','description'=>'']));
        }
        $seo=$seo[0];
        return view('layouts.frontend.pages.not_found',compact('seo'));
    }
    

    // class
}
