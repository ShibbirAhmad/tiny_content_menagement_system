@extends('backend.master')


@push('css')
    <style>
        h3 { margin:10px;}
        h4 { margin-top:20px }
        button { margin:20px;text-size:20px;}
    </style>
@endpush



@section('content')



      <div class="card-header text-center">
          <h3>Add New Post </h3>
      </div>
     
      <div class="card-body text-center">
          <h4 class="heading">Select post Content Type </h4>
         
          <button id="video_content1" class="btn btn-info btn-lg ">Video Content form show </button>
          <button style="display: none;" id="video_content2" class="btn btn-info btn-lg ">Video Content form Hide </button>
         
          <button id="post_content1" class="btn btn-info btn-lg ">Post Content form show </button>
          <button style="display: none;" id="post_content2" class="btn btn-info btn-lg ">Post Content from Hide </button>
     
        </div>



       <div style="display: none;" class="row video_row">
           <div class="col-md-12">

            <h4 style="margin-top:50px;margin-bottom:30px; text-align:center;" class="heading"> This is vido Content .
                It will display first section of your front site</h4>

          {!! Form::open(['route' => 'admin.post.store','files'=> true]) !!}

                 {!! Form::label('title', 'Video Title',) !!}
                 {!! Form::text('title', '', ['class' => 'form-control form-inline', 'placeholder' => 'write Sweet title of video ']) !!}
                 
                 {!! Form::hidden('content_type', 'video', ) !!}

                 <div style="margin-top:10px;" class="form-group  ">
                 {!! Form::label('postImage', 'this video thumbnail', ) !!}
                 {!! Form::file('postImage', ['class' => 'form-control form-inline ']) !!}  
                 </div>
                 
                 {!! Form::label('video_link', 'youtube Video or embaded link',) !!}

                  <input type="text" class="form-control" placeholder=" youtube video link"  name="video_link" id="">

                 <div style="margin-top:10px;" class="form-group ">
                    
                    {!! Form::label('description', 'Post Related Description', ) !!}

                    {!! Form::textarea('description', '', ['id' => 'ckeditor','class'=>'form-control', 'placeholder' => 'write Sweet description of video ']) !!}
                    
                </div>

                {!! Form::submit('Save', ['class' => 'btn btn-lg btn-primary ']) !!}

               {!! Form::close() !!}
           </div>
         
               
         
            
         
           
        
       </div>

       <div style="display: none;" class="row post_row">
        <div class="col-md-12">

         <h4 style="margin-top:50px;margin-bottom:30px; text-align:center;" class="heading"> This is post Content .
             It will display right section or second section  of your front site</h4>

       {!! Form::open(['route' => 'admin.post.store','files'=> true]) !!}

             {!! Form::label('title', 'Post Title',) !!}
              {!! Form::text('title', '', ['class' => 'form-control form-inline' ,'placeholder' => 'write Sweet title of post ']) !!}
              
              {!! Form::hidden('content_type', 'post', ) !!}

              <div style="margin-top:10px;" class="form-group  ">
              {!! Form::label('postImage', 'Post Related Image', ) !!}
              {!! Form::file('postImage', ['class' => 'form-control form-inline ']) !!}  
              </div>
              
              <div class="form-group">
                 
                 {!! Form::label('description', 'Post Related Description', ) !!}

                 {!! Form::textarea('description', '', ['id' => 'editor','class'=>'form-control', 'placeholder' => 'write Sweet description of post ']) !!}
                 
             </div>

             {!! Form::submit('Save', ['class' => 'btn btn-lg btn-primary ']) !!} 

            {!! Form::close() !!}
        </div>
      
        
     
    </div>



@endsection



@push('js')
    

<script> 

    $(function () {

        //CKEditor
        CKEDITOR.replace('ckeditor');
        CKEDITOR.config.height = 300;
    
        

        console.log("Hello");
      
      //display for video content 
      // first click it will open the form row and second click will hide 
        $('#video_content1').on('click',function(){

             $('.video_row').show()
             $(this).hide()
             $('#video_content2').show() 
        })
        
        $('#video_content2').on('click',function(){
            $('.video_row').hide()
            $(this).hide()
            $('#video_content1').show()
        })


        //display for post content form
        // first click it will open the form row and second click will hide 
        $('#post_content1').on('click',function(){

            $('.post_row').show()
            $(this).hide()
             $('#post_content2').show() 

            })

            $('#post_content2').on('click',function(){
            $('.post_row').hide()
            $(this).hide()
            $('#post_content1').show()
           })  
       
    });
    </script>

<script src="{{asset('backend/plugins/ckeditor/ckeditor.js ')}}"></script>

@endpush