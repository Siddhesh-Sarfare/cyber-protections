<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $categoryList = FaqCategory::orderBy('id', 'desc')->get();
        return view('layouts.backend.pages.admin.faq-category.index', compact('categoryList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('layouts.backend.pages.admin.faq-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $newCategory = new FaqCategory();
        $newCategory->category = $request->input('category');
        $operationStatus = $newCategory->save();
        if ($operationStatus) {
            $request->session()->flash('flash_notification.message', 'Category was successfully added.');
            $request->session()->flash('flash_notification.level', 'success');
            return redirect()->route('admin.FaqCategory.index');
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.FaqCategory.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param int $id
     * @return Factory|RedirectResponse|View
     */
    public function edit(Request $request, $id)
    {
        $category = FaqCategory::find($id);
        if (isset($category)) {

            return view('layouts.backend.pages.admin.faq-category.edit', compact('category'));
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.FaqCategory.index');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $Category = FaqCategory::find($id);
        if (isset($Category)) {

            $Category->category = $request->input('category');
            $operationStatus = $Category->save();

            if ($operationStatus) {
                $request->session()->flash('flash_notification.message', 'Category was successfully updated. ');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.FaqCategory.index');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.FaqCategory.edit', $id)->withInput();
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.FaqCategory.edit', $id)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        $Category = FaqCategory::find($id);
        if (isset($Category)) {

            $operationStatus = $Category->delete();

            if ($operationStatus) {
                $request->session()->flash('flash_notification.message', 'Category was successfully deleted. ');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.FaqCategory.index');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.FaqCategory.index');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.FaqCategory.index');
        }
    }
    /**
     * Display the deleted resources
     *
     * @return Factory|View
     */

    public function showDeleted()
    {
        $categoryList = FaqCategory::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('layouts.backend.pages.admin.faq-category.deleted', compact('categoryList'));
    }

    /**
     * Restore the selected resource
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */

    public function restoreDeleted(Request $request, $id)
    {

        $Category = FaqCategory::onlyTrashed()->find($id);
        if (isset($Category)) {

            $operationStatus = $Category->restore();

            if ($operationStatus) {
                $request->session()->flash('flash_notification.message', 'Category was successfully restored. ');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.FaqCategory.deleted.show');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.FaqCategory.deleted.show');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.FaqCategory.deleted.show');
        }
    }
}
