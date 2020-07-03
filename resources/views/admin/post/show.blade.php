@extends('backend.master')


@push('css')
    <style>
        h3 { margin:10px;}
        h4 { margin-top:20px }
        h5 { margin-top:20px ;overflow: hidden;}
        button { margin:20px;text-size:20px;}
        .post_image{ width:80%;height:400px;border-radius:10px; margin-left:100px; }

    </style>
@endpush



@section('content')



       <div  class="row ">
           <div class="col-md-12">

            <div style="background:#E9E9E9 " class="card text-center">
                <div class="card-header mt-5">
                    <h5 class="card-title"> Post Details is Here </h5>
                </div>

                <div class="card-body">
            

                    {!! Form::text('title',$post->title, ['class' => 'form-control form-inline mt-2']) !!}
                    
                 <div style="margin-top:10px;" class="form-group  ">
                    {!! Form::text('','post content type :'. $post->content_type, ['class' => 'form-control  ml-2']) !!}
                 </div>  
   
                    <div style="margin-top:10px;" class="form-group  ">
                
                   
                     <img class="img-responsive post_image" src="{{asset('backend/images/posts/'.$post->feature_img)}}" alt="">
                    </div>
                    
                    <div style="margin-top:10px;" class="form-group  "> 
                      <label for="video_link">Video Link :</label>
                        <input type="text" value="{{$post->embaded_link}}" class="form-control"  name="video_link" id="">
                    </div>

                    <div style="margin-top:10px;" class="form-group ">
   
                       {!! Form::textarea('description', $post->description, ['id' => 'ckeditor','class'=>'form-control']) !!}
                       
                   </div>
   
                   <a href="{{route('admin.post.index')}}" class="btn btn-info m-3 ">Go Back</a>
   
                  
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