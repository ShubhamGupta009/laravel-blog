<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy("created_at",'DESC')->get();
        return view('blog.index',[
            "blogs"=>$blogs
        ]);

        //index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            "title"=>"required",
            "description"=>"required|string",
        ]);
        //Data insertion in Database
        $data['user_id']=1;
        Blog::create($data);
        return to_route("blog.index")->with('success', 'Blog created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show');
        //show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit');;
        //edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        echo "<h1>Update</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        echo "<h1>Destroy</h1>";
    }
}
