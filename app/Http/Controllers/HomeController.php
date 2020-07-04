<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
   
   //this is index function for loading page 
    public function index(){
         //fix video post
          $fix_video_posts=Post::where('is_approved',true)->where('content_type','video')->latest()->take(3)->get();
         //random video post
          $random_video_posts=Post::where('is_approved',true)->where('content_type','video')->take(10)->inRandomOrder()->get();
          //single right side post
          $single_image_post=Post::where('is_approved',true)->where('content_type','post')->take(1)->inRandomOrder()->get();
          //random image post
          $random_image_posts=Post::where('is_approved',true)->where('content_type','post')->take(10)->inRandomOrder()->get();
         
          
        return view('site.index',compact(['fix_video_posts',
                                           'random_video_posts',
                                           'single_image_post',
                                           'random_image_posts']));   
    
    
    
        }




   
}
