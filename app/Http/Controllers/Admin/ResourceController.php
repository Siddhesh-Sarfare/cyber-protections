<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResourceRequest;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resourceList = Resource::orderBy('id', 'DESC')->get();
        return view('layouts.backend.pages.admin.resource.index', compact('resourceList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.pages.admin.resource.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResourceRequest $request)
    {
        //upload the file and link it up
        if ($request->hasFile('resource-image')) {

            if ($request->file('resource-image')->isValid()) {

                $icon = $request->input('icon');
                $title = $request->input('title');
                $description = $request->input('description');
                $image_file = $request->file('resource-image'); // the image  file
                $image_file_name = $image_file->getClientOriginalName(); //the file name with extension
                $image_file_extension = $image_file->getClientOriginalExtension(); // the file extension
                $image_file_path = pathinfo($image_file_name, PATHINFO_FILENAME) . '_' . time() . '.' . $image_file_extension; //generate new random name of the file

                $allowed_file_types = ['jpg', 'jpeg', 'png', 'JPEG', 'JPG', 'PNG']; // allowed extensions

                if (in_array($image_file_extension, $allowed_file_types)) {

                    // move uploaded files to directories and generate url
                    $image_file->move(public_path('assets/backend/images/resource_images'), $image_file_path);

                    //store in database
                    $newFile = new Resource();
                    $newFile->icon = $icon;
                    $newFile->title = $title;
                    $newFile->description = $description;
                    $newFile->image_name = $image_file_name;
                    $newFile->image_path = $image_file_path;
                    $fileUploadStatus = $newFile->save();

                    if ($fileUploadStatus) {
                        $request->session()->flash('flash_notification.message', 'New Resource was successfully created.');
                        $request->session()->flash('flash_notification.level', 'success');
                        return redirect()->route('admin.resource.index')->withInput();
                    } else {

                        $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
                        $request->session()->flash('flash_notification.level', 'danger');
                        return redirect()->route('admin.resource.create');
                    }
                } else {

                    $request->session()->flash('flash_notification.message', 'Only JPG,JPEG,PNG files are allowed, no other format is allowed.');
                    $request->session()->flash('flash_notification.level', 'danger');
                    return redirect()->route('admin.resource.create')->withInput();
                }
            }
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.resource.create');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param ResourceRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ResourceRequest $request, $id)
    {
        $resource = Resource::find($id);
        if (isset($resource)) {
            return view('layouts.backend.pages.admin.resource.edit', compact('resource'));
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.resource.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return void
     */
    public function update(ResourceRequest $request, $id)
    {
        $icon = $request->input('icon');
        $title = $request->input('title');
        $description = $request->input('description');

        //store in database
        $updateFile = Resource::find($id);
        $updateFile->icon = $icon;
        $updateFile->title = $title;
        $updateFile->description = $description;
        $UpdateStatus = $updateFile->save();

        if ($UpdateStatus) {

            if ($request->hasFile('resource-image')) {
                if ($request->file('resource-image')->isValid()) {

                    $image_file = $request->file('resource-image'); // the image  file
                    $image_file_name = $image_file->getClientOriginalName(); //the file name with extension
                    $image_file_extension = $image_file->getClientOriginalExtension(); // the file extension
                    $image_file_path = pathinfo($image_file_name, PATHINFO_FILENAME) . '_' . time() . '.' . $image_file_extension; //generate new random name of the file
                    $allowed_file_types = ['jpg', 'jpeg', 'png', 'JPEG', 'JPG', 'PNG']; // allowed extensions

                    if (in_array($image_file_extension, $allowed_file_types)) {

                        // move uploaded files to directories and generate url
                        $image_file->move(public_path('assets/backend/images/resource_images'), $image_file_path);

                        //store in database
                        $updateFile = Resource::find($id);
                        $updateFile->image_name = $image_file_name;
                        $updateFile->image_path = $image_file_path;
                        $FileUpdateStatus = $updateFile->save();

                        if ($FileUpdateStatus) {
                            $request->session()->flash('flash_notification.message', 'New Resource was successfully updated.');
                            $request->session()->flash('flash_notification.level', 'success');
                            return redirect()->route('admin.resource.index')->withInput();
                        } else {
                            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
                            $request->session()->flash('flash_notification.level', 'danger');
                            return redirect()->route('admin.resource.edit', $id);
                        }
                    } else {
                        $request->session()->flash('flash_notification.message', 'Only JPG,JPEG,PNG files are allowed, no other format is allowed.');
                        $request->session()->flash('flash_notification.level', 'danger');
                        return redirect()->route('admin.resource.edit', $id)->withInput();
                    }
                }
            } else {
                $request->session()->flash('flash_notification.message', 'New Resource was successfully updated.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.resource.index');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.resource.edit', $id);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param ResourceRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResourceRequest $request, $id)
    {
        $resource = Resource::find($id);
        if (isset($resource)) {

            $operationStatus = $resource->delete();

            if ($operationStatus) {

                $request->session()->flash('flash_notification.message', 'Resource was successfully deleted.');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.resource.index');
            } else {
                $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.resource.index');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'Something went wrong, please try again later.');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.resource.index');
        }
    }
    /**
     * Display the deleted resources
     *
     * @return \Illuminate\Http\Response
     */

    public function showDeleted()
    {
        $resourceList = Resource::onlyTrashed()->get();
        return view('layouts.backend.pages.admin.resource.deleted', compact('resourceList'));
    }

    /**
     * Restore the selected resource
     *
     * @param ResourceRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function restoreDeleted(ResourceRequest $request, $id)
    {

        $resource = Resource::withTrashed()->find($id);
        if (isset($resource)) {

            $operationStatus = $resource->restore();

            if ($operationStatus) {
                $request->session()->flash('flash_notification.message', 'Resource successfully restored. ');
                $request->session()->flash('flash_notification.level', 'success');
                return redirect()->route('admin.resource.deleted.show');
            } else {
                $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
                $request->session()->flash('flash_notification.level', 'danger');
                return redirect()->route('admin.resource.deleted.show');
            }
        } else {
            $request->session()->flash('flash_notification.message', 'An error occurred, please try again later. ');
            $request->session()->flash('flash_notification.level', 'danger');
            return redirect()->route('admin.resource.deleted.show');
        }
    }
}
