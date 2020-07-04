<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;


class PostPendingController extends Controller
{
    
     //get for pending post 
     public function pending(){

        $pending_posts= Post::where('is_approved',false)->latest()->get();

          return view('admin.post.pending',compact('pending_posts')) ;

     }


     //function for approve the pending posts
     public function postApprove($id){
           
           $post= Post::findOrFail($id);
           $post->is_approved=true;
           if ($post->save()) {
               
               return redirect()->back()->with('success','this post are now published');
           }
     }



}
