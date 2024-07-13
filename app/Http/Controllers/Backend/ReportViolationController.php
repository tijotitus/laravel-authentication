<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostReport;
use Illuminate\Http\Request;

class ReportViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $this->checkAuthorization(auth()->user(), ['blog.view']);

        return view('backend.pages.posts.index', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $this->checkAuthorization(auth()->user(), ['blog.create']);
        return view('backend.pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'post_id' => 'required',
            'user_id' => 'required',
        ]);
        $data = ['creator_id' => auth()->user()->id] + $request->all();
        PostReport::create($data);
        return redirect()->back()
                ->withSuccess('Post is reported successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $blog) : View
    {
        return view('backend.pages.posts.show', [
            'post' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $blog) : View
    {
        $this->checkAuthorization(auth()->user(), ['blog.edit']);

        return view('backend.pages.posts.edit', [
            'post' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $blog) : RedirectResponse
    {
        $this->checkAuthorization(auth()->user(), ['blog.edit']);

        $validated = $request->validate([
            'title' => 'required|max:255|unique:posts,title,' . $blog->id,
            'description' => 'required',
        ]);
        $blog->update($request->all());
        return redirect()->route('admin.blogs.index')
                ->withSuccess('New post is added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $blog) : RedirectResponse
    {
        $this->checkAuthorization(auth()->user(), ['blog.delete']);
        $blog->delete();
        return redirect()->route('admin.blogs.index')
                ->withSuccess('Post is deleted successfully.');
    }
}