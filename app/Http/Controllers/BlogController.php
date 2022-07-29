<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Video;
use App\Models\Image;
use App\Models\Subcategory;

class BlogController extends Controller
{

    public function index(){
        return view('frontend.master');
    }

    public function About(){
        return view('frontend.About');
    }

    public function Contact(){
        return view('frontend.Contact');
    }

    public function blog(){
        $post = Post::paginate(1);
        $category = Subcategory::all();
        $recent = Post::latest()->paginate(4);
      return view('frontend.blog',compact('post', 'category','recent'));
    }



    public function singlepost($id){
        $single_post = Post::find($id);
        $category = Subcategory::all();
        $recent = Post::latest()->paginate(4);
        return view('frontend.singlepost',compact('single_post', 'category','recent'));
    }


    public function image(){
        $image = Image::all();


    return view('frontend.image',compact('image'));
    }


    public function video(){
        $video = Video::all();

    return view('frontend.video',compact('video'));
    }
}
