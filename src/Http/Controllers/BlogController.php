<?php

namespace ProjectRebel\Blink\Http\Controllers;

class BlogController
{
    public function index()
    {
        return view('blink::blog.index');
    }

    public function show($slug)
    {
        return $slug;
    }
}
