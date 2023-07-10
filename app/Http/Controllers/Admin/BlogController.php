<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogList = Blog::orderBy('id', 'DESC')->get();
        return view('layouts.backend.pages.admin.blog.index', compact('blogList'));
    }

    /**
     * Show the form for creating a new blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.pages.admin.blog.create');
    }

    /**
     * Store a newly created blog in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        //upload the file and link it up
        if ($request->hasFile('blog-image')) {

            if ($request->file('blog-image')->isValid()) {

                $title = $request->input('title');
                $permanent_link = $request->input('permanent_link');
                $author = $request->input('author');
                $description = $request->input('description');
                $image_file = $request->file('blog-image'); // the image  file
                $image_file_name = $image_file->getClientOriginalName(); //the file name with extension
                $image_file_extension = $image_file->getClientOriginalExtension(); // the file extension
                $image_file_path = pathinfo($image_file_name, PATHINFO_FILENAME) . '_' . time() . '.' . $image_file_extension; //generate new random name of the file

                $allowed_file_types = ['jpg', 'jpeg', 'png', 'JPEG', 'JPG', 'PNG']; // allowed extensions

                if (in_array($image_file_extension, $allowed_file_types)) {

                    // move uploaded files to directories and generate url
                    $image_file->move(public_path('assets/backend/images/blog_images'), $image_file_path);

                    //store in database
                    $newFile = new Blog();
                    $newFile->title = $title;
                    $newFile->permanent_link = $permanent_link;
                    $newFile->author = $author;
                    $newFile->description = $description;
                    $newFile->image_name = $image_file_name;
                    $newFile->image_path = $image_file_path;
                    $fileUploadStatus = $newFile->save();

                    if ($fileUploadStatus) {
                        $request->session()->flash('flash_notification.message', 'New Blog was successfully created.');
                        $request->session()->flash('flash_notification.level', 'success');
                        return redirect()->route('admin.blog.index')->withInput();
                    } else {

                        $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
                        $request->session()->flash('flash_notification.level', 'danger');
                        return redirect()->route('admin.blog.create');
                    }
                } else {

                    $request->session()->flash('flash_notification.message', 'Only JPG,JPEG,PNG files are allowed, no other format is allowed.');
                    $request->session()->flash('flash_notification.level', 'danger');
                    return redirect()->route('admin.blog.create')->withInput();
                }
            }
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.blog.create');
        }
    }


    /**
     * Show the form for editing the specified blog.
     *
     * @param BlogRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        if (isset($blog)) {
            return view('layouts.backend.pages.admin.blog.edit', compact('blog'));
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.blog.index');
        }
    }

    /**
     * Update the specified blog in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return void
     */
    public function update(BlogRequest $request, $id)
    {
        $title = $request->input('title');
        $permanent_link = $request->input('permanent_link');
        $author = $request->input('author');
        $description = $request->input('description');

        //store in database
        $updateFile = Blog::find($id);
        $updateFile->title = $title;
        $updateFile->permanent_link = $permanent_link;
        $updateFile->author = $author;
        $updateFile->description = $description;
        $UpdateStatus = $updateFile->save();

        if ($UpdateStatus) {

            if ($request->hasFile('blog-image')) {
                if ($request->file('blog-image')->isValid()) {

                    $image_file = $request->file('blog-image'); // the image  file
                    $image_file_name = $image_file->getClientOriginalName(); //the file name with extension
                    $image_file_extension = $image_file->getClientOriginalExtension(); // the file extension
                    $image_file_path = pathinfo($image_file_name, PATHINFO_FILENAME) . '_' . time() . '.' . $image_file_extension; //generate new random name of the file
                    $allowed_file_types = ['jpg', 'jpeg', 'png', 'JPEG', 'JPG', 'PNG']; // allowed extensions

                    if (in_array($image_file_extension, $allowed_file_types)) {

                        // move uploaded files to directories and generate url
                        $image_file->move(public_path('assets/backend/images/blog_images'), $image_file_path);

                        //store in database
                        $updateFile = Blog::find($id);
                        $updateFile->image_name = $image_file_name;
                        $updateFile->image_path = $image_file_path;
                        $FileUpdateStatus = $updateFile->save();

                        if ($FileUpdateStatus) {
                            $request->session()->flash('flash_notification.message', 'New Blog was successfully updated.');
                            $request->session()->flash('flash_notification.level', 'success');
                            return redirect()->route('admin.blog.index')->withInput();
                        } else {
                            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
                            $request->session()->flash('flash_notification.level', 'danger');
                            return redirect()->route('admin.blog.edit', $id);
                        }
                    } else {
                        $request->session()->flash('flash_notification.message', 'Only JPG,JPEG,PNG files are allowed, no other format is allowed.');
                        $request->session()->flash('flash_notification.level', 'danger');
                        return redirect()->route('admin.blog.edit', $id)->withInput();
                    }
                }
            } else {
                $request->session()->flash('flash_notification.message', 'New Blog was successfully updated.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.blog.index');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.blog.edit', $id);
        }
    }


    /**
     * Remove the specified blog from storage.
     *
     * @param BlogRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        if (isset($blog)) {

            $operationStatus = $blog->delete();

            if ($operationStatus) {

                $request->session()->flash('flash_notification.message', 'Blog was successfully deleted.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.blog.index');
            } else {
                $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.blog.index');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.blog.index');
        }
    }
    /**
     * Display the deleted blogs
     *
     * @return \Illuminate\Http\Response
     */

    public function showDeleted()
    {
        $blogList = Blog::onlyTrashed()->get();
        return view('layouts.backend.pages.admin.blog.deleted', compact('blogList'));
    }

    /**
     * Restore the selected blog
     *
     * @param BlogRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function restoreDeleted(BlogRequest $request, $id)
    {

        $blog = Blog::withTrashed()->find($id);
        if (isset($blog)) {

            $operationStatus = $blog->restore();

            if ($operationStatus) {
                $request->session()->flash('flash_notification.message', 'Blog successfully restored. ');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.blog.deleted.show');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.blog.deleted.show');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.blog.deleted.show');
        }
    }
}
