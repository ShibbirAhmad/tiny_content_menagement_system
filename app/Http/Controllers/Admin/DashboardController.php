<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class DashboardController extends Controller
{
     public function index(){

           return view ('admin.dashboard');
         
     }


     //get for pending post 
     public function pending(){

      $pending_posts= Post::where('is_approved',false)->latest()->get();

        return view('admin.dashboard',compact('pending_posts')) ;

   }




}
