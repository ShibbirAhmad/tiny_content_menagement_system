@extends('site.layout.master')

{{-- if css needed --}}
@push('css')
    
<style> 
    
    .random-post {
        
             float: left;
             margin: 20px;
             margin-left:0px;
             height:auto;
             width:45%;

             }
     .latest-post-img {
                         
             height:400px;
             width:100%;
             border-radius:10px;
             margin-bottom:10px;
             background:rgba(177, 177, 136, 0.267);

     }        

</style>

@endpush


{{-- content section is here --}}
@section('content')
    
      
  <!--post content  details start  -->
  <div class="col-md-8 col-sm-12">
              
    <div class="card">
        <div class="card-header">
            <h4>{{ $post->title }}</h4>
        </div>

        <div class="card-body">
           <div class="latest-post-img-container">
           
               <img class="latest-post-img img-responsive" src="{{asset('backend/images/posts/'.$post->feature_img)}}" alt="">

               <p> {!! $post->description !!}  </p>     

              </div>
        </div>
        <div class="card-footer">
           share post now : 
           <a target="_blank" href="{{route('facebook')}}"><i class="fab fa-lg fa-facebook-f "></i>  </a>  
           <a target="_blank" href="{{route('twitter')}}"><i class="fab fa-lg fa-twitter "></i> </a> 
           <a target="_blank" href="{{route('linkedin')}}"> <i class="fab  fa-lg fa-linkedin"></i> </a>
           <a target="_blank" href="{{route('pinterest')}}"> <i class="fab  fa-lg  fa-pinterest"></i> </a> 
           <a target="_blank" href="{{route('vimeo')}}"> <i class="fab  fa-lg  fa-vimeo-square"></i> </a> 
      
        
       </div>
    </div>

    <div class="card mt-3">
       <h4 class="heading">post comment:</h4>
        <div class="card-body">
            <form class="form" action="">
                <label for="comment">Comment</label>
                <textarea class="form-control" name="comment"  rows="5"></textarea>
                <input type="submit" value="submit " class="btn btn-info m-2 ">
               </form>
        </div>
    </div>
</div>
 <!--content endt -->



<!--post content start  -->
<div class="col-md-4 col-sm-12">

   <div class="card">
       <div class="card-header text-center "><h4 >Recomended Content</h4></div>
       <div class="card-body mt-2 ">
      
        @foreach ($random_image_posts as $r_post)
            <div class="random-post">
                <a class="" href="{{ route('post.details',$r_post->slug) }}">
                <img class="img-responsive random-post-img" src="{{asset('backend/images/posts/'.$r_post->feature_img)}}" alt=""> 
                </a> 
                    <h4> {{ $r_post->title }} </h4>   
             </div>
       @endforeach

           
       </div>
     
   </div>
 
</div>

<!--post content start  -->

       
@endsection




{{-- extra script section  --}}
@push('js')
    
@endpush