<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Offer;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    function home(){

        $offers = Offer::latest()->take(4)->get();
        $blogs = Blog::latest()->take(4)->get();

        return view('welcome', compact('blogs', 'offers'));
    }



    function detail($blog_id){

        $blog = blog::where('id',$blog_id)->first();

        return view('blog-detail', compact('blog'));
    }


}

