@extends('site.layout.master')

{{-- if css needed --}}
@push('css')
    
@endpush


{{-- content section is here --}}
@section('content')
    
        <!--video content start  -->
        <div class="col-md-8 col-sm-12">
            <div class="row">  

                <!--video content big area start  -->
                <div class="col-md-6 col-sm-12">

                    @foreach ($fix_video_posts as $fix_video_post)
                    <div class="big_video_area ">
                      
                         <div style=" 
                         height:240px;
                         width:100%;
                         border-radius:10px;
                         background:url({{asset('backend/images/posts/'.$fix_video_post->feature_img)}});
                         background-repeat:no-repeat;
                         background-size:100% 240px " >
                 
                         </div> 
                    
                         <a  href="{{route('video.details',$fix_video_post->slug)}}" class="video-icon float-right "> <i class="fa fa-lg fa-play-circle "></i></a> 
                       
                       <h4> {{ $fix_video_post->title }} </h4>
                       
                       <p> {!! $fix_video_post->description !!}   </p> 

                    </div>
                    @endforeach
                      
                </div>
                <!--video content big area end  --> 

                <div class="col-md-6 col-sm-12">


                 @foreach ($random_video_posts as $r_v_post)
                     
                <div class="small_video_area ">
                    <div style=" 
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
         <!--video content endt -->



       <!--post content start  -->
       <div class="col-md-4 col-sm-12">

             <div class="row">
              <!--latest post -->
              <div class="col-md-12 latest-post ">
                    <div class="latest-post-img-container">
                    @foreach ($single_image_post as $single_image_post)
                    <img class="latest-post-img img-responsive" src="{{ asset('backend/images/posts/'.$single_image_post->feature_img)}}" alt="">

                    <h4> {{ $single_image_post->title }} </h4>

                       <p> {!! $single_image_post->description !!} </p>     

                    @endforeach
                       
                      </div>
              </div>
             <!--latest post -->

              <!--random post -->
             <div class="col-md-12">
               
               @foreach ($random_image_posts as $r_post)
               <div class="random-post">
                    <a class="" href="{{ route('post.details',$r_post->slug) }}">
                    <img class="img-responsive random-post-img" src="{{asset('backend/images/posts/'.$r_post->feature_img)}}" alt=""> 
                    </a> 
                     <h4> {{ $r_post->title }} </h4>   
                 </div>
               @endforeach

             </div>
              <!--random post -->



           </div> 
       </div>
       
       <!--post content end  -->

       
@endsection




{{-- extra script section  --}}
@push('js')
    
@endpush