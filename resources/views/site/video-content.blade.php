@extends('site.layout.master')

{{-- if css needed --}}
@push('css')
   <style>
       .video_wrap{ width: 100%; height: auto;}
       .card-body{float: left; margin:20px; width:30%;height:auto;background:#ddd; border-radius:5px;}
     
  </style>
@endpush


{{-- content section is here --}}
@section('content')

    <div class="col-md-12 col-sm-12 video_wrap">
   
            @foreach ($posts as $post)
           
            <div class="card-body">
                    <div style=" 
                    width:100%;
                    height:240px;
                    border-radius:10px;
                    background:url({{asset('backend/images/posts/'.$post->feature_img)}});
                    background-repeat:no-repeat;
                    background-size:100% 240px;  " class="video">
        
                    </div>

                    <a  href="{{route('video.details',$post->slug)}}" class="video-icon float-right "> <i class="fa fa-lg fa-play-circle "></i></a> 
                      
                     <h4> {{ $post->title }} </h4>
                </div>

            @endforeach
        

     
        <div class="card-body">
            <div class="video">

            </div>
        </div>
        <div class="card-body">
            <div class="video">

            </div>
        </div>
    </div>

@endsection




{{-- extra script section  --}}
@push('js')
    
@endpush