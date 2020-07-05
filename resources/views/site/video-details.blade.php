@extends('site.layout.master')

{{-- if css needed --}}
@push('css')
    
<style> 
    
 
     .embaded-video {
                         
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
  <div class="col-md-8 col-sm-12 left-section">
              
    <div class="card">
        <div class="card-header">
            <h4>{{ $post->title }}</h4>
        </div>

        <div class="card-body mt-2 ">
           <div class="latest-post-img-container">
           

               <iframe src="{{ $post->embaded_link }}" class="embaded-video" frameborder="0" control="1" ></iframe>
               <p> {!! $post->description !!} </p>     

              </div>
        </div>
        <div class="card-footer">
           share video now : 
           <a target="_blank" href="{{route('facebook')}}"><i class="fab fa-lg fa-facebook-f "></i>  </a>  
           <a target="_blank" href="{{route('twitter')}}"><i class="fab fa-lg fa-twitter "></i> </a> 
           <a target="_blank" href="{{route('linkedin')}}"> <i class="fab  fa-lg fa-linkedin"></i> </a>
           <a target="_blank" href="{{route('pinterest')}}"> <i class="fab  fa-lg  fa-pinterest"></i> </a> 
           <a target="_blank" href="{{route('vimeo')}}"> <i class="fab  fa-lg  fa-vimeo-square"></i> </a> 
      
        
       </div>
    </div>

    <div class="card mt-3">
       <h4 class="heading">video comment:</h4>
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
<div class="col-md-4 col-sm-12 right-section ">

   <div class="card">
       <div class="card-header text-center "><h4 >Recomended Content</h4></div>
       <div class="card-body mt-2 ">

           
        @foreach ($random_video_posts as $r_v_post)
                     
        <div class="small_video_area ">
            <div class="smail" style=" 
            height:140px;
            width:100%;
            border-radius:5px;
            background:url({{asset('backend/images/posts/'.$r_v_post->feature_img)}});
            background-repeat:no-repeat;
            background-size:100% 140px " >

            </div> 

           <a class="small-video-icon" href="{{route('video.details',$r_v_post->slug)}}"> <i class="fa fa-lg fa-play-circle "></i> </a> 
       </a> 

     <h4> {{ $r_v_post->title }} </h4>
    </div>
         @endforeach

         
       </div>
     
   </div>
 
</div>



       
@endsection




{{-- extra script section  --}}
@push('js')
    
@endpush