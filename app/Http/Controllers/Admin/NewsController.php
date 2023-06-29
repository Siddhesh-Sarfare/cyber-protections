<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the news.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsList = News::orderBy('id', 'DESC')->get();
        return view('layouts.backend.pages.admin.news.index', compact('newsList'));
    }

    /**
     * Show the form for creating a new news.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.pages.admin.news.create');
    }

    /**
     * Store a newly created news in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $news = new News();
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->link = $request->input('link');
        $save = $news->save();
        if ($save) {
            $request->session()->flash('flash_notification.message', 'News successfully added.');
            $request->session()->flash('flash_notification.level', 'success');
            return redirect()->route('admin.news.index');
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.news.index');
        }
    }


    /**
     * Show the form for editing the specified news.
     *
     * @param NewsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsRequest $request, $id)
    {
        $news = News::find($id);
        if (isset($news)) {
            return view('layouts.backend.pages.admin.news.edit', compact('news'));
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.news.index');
        }
    }

    /**
     * Update the specified news in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return void
     */
    public function update(NewsRequest $request, $id)
    {
        $updateNews = News::find($id);
        if (isset($updateNews)) {

            $updateNews->title = $request->input('title');
            $updateNews->description = $request->input('description');
            $updateNews->link = $request->input('link');
            $update = $updateNews->save();

            if ($update) {
                $request->session()->flash('flash_notification.message', 'News successfully updated.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.news.index');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.news.edit', $id)->withInput();
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.news.edit', $id)->withInput();
        }
    }


    /**
     * Remove the specified news from storage.
     *
     * @param NewsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsRequest $request, $id)
    {
        $news = News::find($id);
        if (isset($news)) {

            $operationStatus = $news->delete();

            if ($operationStatus) {

                $request->session()->flash('flash_notification.message', 'News was successfully deleted.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.news.index');
            } else {
                $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.news.index');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.news.index');
        }
    }
    /**
     * Display the deleted newss
     *
     * @return \Illuminate\Http\Response
     */

    public function showDeleted()
    {
        $newsList = News::onlyTrashed()->get();
        return view('layouts.backend.pages.admin.news.deleted', compact('newsList'));
    }

    /**
     * Restore the selected news
     *
     * @param NewsRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function restoreDeleted(NewsRequest $request, $id)
    {

        $news = News::withTrashed()->find($id);
        if (isset($news)) {

            $operationStatus = $news->restore();

            if ($operationStatus) {
                $request->session()->flash('flash_notification.message', 'News successfully restored. ');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.news.deleted.show');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.news.deleted.show');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.news.deleted.show');
        }
    }
}
