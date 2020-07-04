@extends('backend.master')


@push('css')
    <style>
        h3 { margin:10px;}
        h4 { margin-top:20px;margin-left:20px; }
        h5 { margin-top:20px ;overflow: hidden;}
        .btnGo { margin:20px;font-size:22px;}
        .post_image{ width:80%;height:400px;border-radius:10px; margin-left:100px; }


    </style>
@endpush



@section('content')



       <div  class="row ">
           <div class="col-md-12">

            <div style="background:#E9E9E9 ;overflow:hidden" class="card ">
                <div class="card-header mt-5">
                    <h4 class="card-title">  </h4>
                </div>

                <div class="card-body  ">
            
                   <h4> Title : {{ $post->title }}</h4>

                   <h4> Content Type : {{$post->content_type }}</h4>
   
                    <div style="margin-top:10px;" class="form-group  ">
                
                   
                     <img class="img-responsive post_image" src="{{asset('backend/images/posts/'.$post->feature_img)}}" alt="">
                    </div>
                    @if ($post->content_type== 'video')
                    <div style="margin-top:10px;" class="form-group  "> 
                        <label for="video_link">Video embaded Link :</label>
                          <input type="text" value="{{$post->embaded_link}}" class="form-control"  name="video_link" id="">
                      </div>
                    @endif
                   
                    <div style="margin-top:10px;" class="form-group ">
   
                       {!! Form::textarea('description', $post->description, ['id' => 'ckeditor','class'=>'form-control']) !!}
                       
                   </div>
   
                   <a href="{{route('admin.post.pending')}}" class="btn btn-lg btn-info btnGo ">Go Back</a>
   
                  
              </div>
            
                     
                </div>
            </div>

       </div>

  
      
        
     



@endsection



@push('js')
    

<script> 

    $(function () {

        //CKEditor
        CKEDITOR.replace('ckeditor');
        CKEDITOR.config.height = 300;
    
        
              
    });
    </script>

<script src="{{asset('backend/plugins/ckeditor/ckeditor.js ')}}"></script>

@endpush