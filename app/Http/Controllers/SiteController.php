<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 


class SiteController extends Controller
{
    

     //route for post content 
     public function postContent(){

          $posts= Post::where('content_type','post')->where('is_approved',true )->latest()->get();

          return view('site.image-content',compact('posts'));

     }



     //route for post content 
     public function videoContent(){

          $posts= Post::where('content_type','video')->where('is_approved',true )->latest()->get();

          return view('site.video-content',compact('posts'));
          
     }


      //function for video details 
      public function videoDetails ($slug){
           
                  $post=Post::where('slug',$slug)->where('is_approved',true)->first();
                  //random video post
                 $random_video_posts=Post::where('is_approved',true)->where('content_type','video')->take(10)->inRandomOrder()->get();
         

           return view('site.video-details',compact('post','random_video_posts'));

       }

      


       //function for video details 
       public function postDetails ($slug){

            
            $post=Post::where('slug',$slug)->where('is_approved',true)->first();
              //random image post
          $random_image_posts=Post::where('is_approved',true)->where('content_type','post')->take(10)->inRandomOrder()->get();
         
            return view('site.post-details',compact('post','random_image_posts'));


       }





}
