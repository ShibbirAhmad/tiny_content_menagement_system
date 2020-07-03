<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('is_approved',true)->latest()->get();
        return view ('admin.post.index',\compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            

        $data= $request->all();
   
        $validate=Validator::make($data,[
          
            'title' => 'required|unique:posts',
            'postImage' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required',
             

            ]);

        if ($validate->fails()) {
           
             return redirect()->back()->withErrors($validate)->withInput();

        }

        if (!$validate->fails()) {
              
             $post= new Post ;
             $post->title=$request->input('title');
             $post->slug=str_slug($request->input('title'));
             $post->content_type=$request->input('content_type');
             $post->description=$request->input('description');
             $post->embaded_link=$request->input('video_link');
             $post->is_approved=false ;
             $post->author=Auth::user()->name;


             if ($request->hasFile('postImage')) {
                $image=$request->file('postImage');
                $slug=str_slug($request->title);
                $imageName=$slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('backend/images/posts/'),$imageName);

            $post->feature_img=$imageName ;
              
                } 

             if($post->save() ){

                return redirect()->route('admin.post.index')->with('success','successfully! New Post Added');      
             
                  }

               
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return \view('admin.post.show',\compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $delt_post= Post::findOrFail($id);
         
         if (file_exists('backend/images/posts/'.$delt_post->feature_img)) {
          
            unlink('backend/images/posts/'.$delt_post->feature_img);
  
         }
         
         if ($delt_post->delete()) {
            
             return redirect()->back()->with('danger','one post Deleted permanently');
         }
    }
}
