@extends('site.layout.master')

{{-- if css needed --}}
@push('css')
   <style>
       .video_wrap{ width: 100%; height: auto;}
       .card-body{float: left; margin:20px; width:30%;height:auto;background:#ddd; border-radius:5px;}
       .img_custom{ width:100%;height:240px;border-radius:10px;}
  </style>
@endpush


{{-- content section is here --}}
@section('content')

    <div class="col-md-12 col-sm-12 video_wrap">
        @foreach ($posts as $post)
        
        <div class="card-body">
            <a href="{{route('post.details',$post->slug)}}">  <img class="img-responsive img_custom "  src="{{asset('backend/images/posts/'.$post->feature_img )}}" alt="post img">
            </a>
            <h4> {{ $post->title }}</h4>

           </div>
         
           
       @endforeach
       
    </div>

@endsection




{{-- extra script section  --}}
@push('js')
    
@endpush