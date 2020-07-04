<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class DashboardController extends Controller
{
     public function index(){
          
          $total_pending_content=Post::where('is_approved',false)->count();
          $total_published_content=Post::where('is_approved',true)->count();
          $total_post_content=Post::where('content_type','post')->count();
          $total_video_content=Post::where('content_type','video')->count();
          // display for pending
          $pending_posts= Post::where('is_approved',false)->latest()->get();


           return view ('admin.dashboard',compact('total_pending_content',
                                                    'total_published_content',
                                                    'total_post_content',
                                                    'total_video_content',
                                                    'pending_posts'
           
                                                  ));
         
     }







}
