<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqList = Faq::orderBy('id', 'DESC')->get();
        return view('layouts.backend.pages.admin.faq.index', compact('faqList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = FaqCategory::all();
        return view('layouts.backend.pages.admin.faq.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        $category = $request->input('category');
        $question = $request->input('question');
        $answer = $request->input('answer');

        //store in database
        $storeFaq = new Faq();
        $storeFaq->category = $category;
        $storeFaq->question = $question;
        $storeFaq->answer = $answer;

        $save = $storeFaq->save();
        if ($save) {
            $request->session()->flash('flash_notification.message', 'FAQ successfully added.');
            $request->session()->flash('flash_notification.level', 'success');
            return redirect()->route('admin.faq.index');
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.faq.index');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param FaqRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqRequest $request, $id)
    {
        $faq = Faq::find($id);
        if (isset($faq)) {
            $category = FaqCategory::all();
            return view('layouts.backend.pages.admin.faq.edit', compact('faq', 'category'));
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.faq.index');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return void
     */
    public function update(FaqRequest $request, $id)
    {
        $category = $request->input('category');
        $question = $request->input('question');
        $answer = $request->input('answer');

        //store in database
        $updateFaq = Faq::find($id);
        if (isset($updateFaq)) {
            $updateFaq->category = $category;
            $updateFaq->question = $question;
            $updateFaq->answer = $answer;
            $update = $updateFaq->save();

            if ($update) {
                $request->session()->flash('flash_notification.message', 'Faq successfully updated.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.faq.index');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.faq.edit', $id)->withInput();
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.faq.edit', $id)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param FaqRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqRequest $request, $id)
    {
        $faq = Faq::find($id);
        if (isset($faq)) {

            $operationStatus = $faq->delete();

            if ($operationStatus) {

                $request->session()->flash('flash_notification.message', 'Faq was successfully deleted.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.faq.index');
            } else {
                $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.faq.index');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.faq.index');
        }
    }
    /**
     * Display the deleted resources
     *
     * @return \Illuminate\Http\Response
     */

    public function showDeleted()
    {
        $faqList = Faq::onlyTrashed()->get();
        return view('layouts.backend.pages.admin.faq.deleted', compact('faqList'));
    }

    /**
     * Restore the selected resource
     *
     * @param FaqRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function restoreDeleted(FaqRequest $request, $id)
    {

        $faq = Faq::withTrashed()->find($id);
        if (isset($faq)) {

            $operationStatus = $faq->restore();

            if ($operationStatus) {
                $request->session()->flash('flash_notification.message', 'FAQ successfully restored.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.faq.deleted.show');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.faq.deleted.show');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.faq.deleted.show');
        }
    }
}
