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
        return view('blog.index');

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
        echo "<h1>Store</h1>";
        //store.blade.php
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return "<h1>Show</h1>";
        //show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        echo "<h1>Edit</h1>";
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
