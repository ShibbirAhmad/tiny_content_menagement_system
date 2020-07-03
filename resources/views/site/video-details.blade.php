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
  <div class="col-md-8 col-sm-12">
              
    <div class="card">
        <div class="card-header">
            <h4>Why Laravel is the famous backend framwork in the world</h4>
        </div>

        <div class="card-body">
           <div class="latest-post-img-container">
           

               <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=1" class="embaded-video" frameborder="0" control="1" ></iframe>
               <p>
                  this video description lorem ipsum this video title
                  lorem ipsum this video title lorem ipsum this video title lorem ipsum this video title
                  lorem ipsum this video title lorem ipsum 
              
                  this video description lorem ipsum this video title
                  lorem ipsum this video title lorem ipsum this video title lorem ipsum this video title
                  lorem ipsum this video title lorem ipsum   this video description lorem ipsum this video title
                  lorem ipsum this video title lorem ipsum this video title lorem ipsum this video title
                  lorem ipsum this video title lorem ipsum 

                  this video description lorem ipsum this video title
                  lorem ipsum this video title lorem ipsum this video title lorem ipsum this video title
                  lorem ipsum this video title lorem ipsum 
              
              </p>     

              </div>
        </div>
        <div class="card-footer">
           share video now : 
           <a href=""><i class="fab fa-lg fa-facebook-f "></i>  </a>  
           <a href=""><i class="fab fa-lg fa-twitter "></i> </a> 
           <a href=""> <i class="fab  fa-lg fa-linkedin"></i> </a>
           <a href=""> <i class="fab  fa-lg  fa-pinterest"></i> </a> 
           <a href=""> <i class="fab  fa-lg  fa-vimeo-square"></i> </a> 
      
        
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
<div class="col-md-4 col-sm-12">

   <div class="card">
       <div class="card-header text-center "><h5 >Recomended Content</h5></div>
       <div class="card-body">
           <div class="random-post">
               <a class="random-post-img" href="post-details.html">
               <img class="img-responsive" src="" alt=""> 
               </a> 
                <h4>this video title lorem ipsum this video title
                   lorem ipsum this video title lorem ipsum </h4>   
            </div>

            <div class="random-post">
               <a class="random-post-img" href="post-details.html">
               <img class="img-responsive" src="" alt=""> 
               </a> 
                <h4>this video title lorem ipsum this video title
                   lorem ipsum this video title lorem ipsum </h4>   
            </div>

            <div class="random-post">
               <a class="random-post-img" href="post-details.html">
               <img class="img-responsive" src="" alt=""> 
               </a> 
                <h4>this video title lorem ipsum this video title
                   lorem ipsum this video title lorem ipsum </h4>   
            </div>


             <div class="random-post">
               <a class="random-post-img" href="post-details.html">
               <img class="img-responsive" src="" alt=""> 
               </a> 
                <h4>this video title lorem ipsum this video title
                   lorem ipsum this video title lorem ipsum </h4>   
            </div>
       </div>
     
   </div>
 
</div>

<!--post content start  -->

       
@endsection




{{-- extra script section  --}}
@push('js')
    
@endpush