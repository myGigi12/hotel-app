<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function add(){

        return view('admin.add_blog');
    }

    function store(Request $request){

        $image = $request->file('image');

        $extension = $image->getClientOriginalExtension();
        $filename = uniqid().".$extension";
        $image->storePubliclyAs('public/images', $filename);


        Blog::create([

            'name'=>$request->name,
            'tittle'=>$request->tittle,
            'content'=>$request->content,
            'image' =>"images/$filename"

        ]);
        return back();



    }

}
