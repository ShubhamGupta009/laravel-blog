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
        $blogs = Blog::query()
        ->where("user_id",request()->user()->id)
        ->orderBy("created_at",'DESC')->paginate(10); // default paginate value is 15 but we are passing 10 to show 10 records at once
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
        $data['user_id']=request()->user()->id;
        Blog::create($data);
        return to_route("blog.index")->with('success', 'Blog created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show',["blog"=>$blog]);
        //show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit',["blog"=>$blog]);
        //edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            "title"=>"required",
            "description"=>"required|string"
        ]);
        $blog->update($data);
        return to_route('blog.show',$blog)->with("success","Blog Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return to_route('blog.index')->with("success","Blog Deleted Successfully");
    }
}
