<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SEORequest;
use App\Models\SEO;

class SEOController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seoList = SEO::orderBy('id', 'DESC')->get();
        return view('layouts.backend.pages.admin.seo.index', compact('seoList'));
    }

    /**
     * Show the form for creating a new blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.pages.admin.seo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SEORequest $request)
    {
        $page = $request->input('page');
        $keywords = $request->input('keywords');
        $description = $request->input('description');

        //store in database
        $storeSEO = new SEO();
        $storeSEO->page = $page;
        $storeSEO->keywords = $keywords;
        $storeSEO->description = $description;

        $save = $storeSEO->save();
        if ($save) {
            $request->session()->flash('flash_notification.message', 'SEO successfully added.');
            $request->session()->flash('flash_notification.level', 'success');
            return redirect()->route('admin.seo.index');
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.seo.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param FaqRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SEORequest $request, $id)
    {
        $seo = SEO::find($id);
        if (isset($seo)) {
            return view('layouts.backend.pages.admin.seo.edit', compact('seo',));
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.seo.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return void
     */
    public function update(SEORequest $request, $id)
    {
        $page = $request->input('page');
        $keywords = $request->input('keywords');
        $description = $request->input('description');

        //store in database
        $updateSEO = SEO::find($id);
        if (isset($updateSEO)) {
            $updateSEO->page = $page;
            $updateSEO->keywords = $keywords;
            $updateSEO->description = $description;
            $update = $updateSEO->save();

            if ($update) {
                $request->session()->flash('flash_notification.message', 'SEO successfully updated.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.seo.index');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.seo.edit', $id)->withInput();
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.seo.edit', $id)->withInput();
        }
    }



    // class
}
