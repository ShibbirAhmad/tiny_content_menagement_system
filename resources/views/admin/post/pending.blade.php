@extends('backend.master')


@push('css')
    <style>
        { font-size:16px;margin:10px;}
        .img-info {width: 100px;height:80px;border-radius: 10px; }
    </style>
@endpush



@section('content')

 
<div class="row clearfix">
    <!-- Task Info -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
               
                <h4 class="heading">Total pending or Unpublished Contents</h4>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table text-center table-hover dashboard-task-infos">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Title</th>
                                <th>Content_type</th>
                                <th>Feature_Image</th>
                                <th>Status</th>
                                <th>Author</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Serial No</th>
                                <th>Title</th>
                                <th>Content_type</th>
                                <th>Feature_Image</th>
                                <th>Status</th>
                                <th>Author</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($pending_posts as $key=> $post)
                        
                            <tr>
                                <td>{{$key+1 }}</td>
                                <td>{{ str_limit($post->title,35) }}</td>
                                <td>{{$post->content_type  }}</td>
                                <td> <img  class="img-responsive img-info " src="{{asset('backend/images/posts/'.$post->feature_img)}}" alt=""> </td>

                                <td>
                                    @if ($post->is_approved==true)
                                    <span class="label bg-green">published</span> 
                                    @else
                                    <span class="label bg-pink">pending</span> 
                                    @endif
                                </td>

                                <td> {{$post->author }} </td>
                                <td colspan="2">
                                    <a  href="{{route('admin.post.pending.show',$post->id)}}" style="margin-bottom:5px;margin-left:-40px;" class="btn btn-dark "><i style="color:#000" class="fa fa-lg fa-eye  "></i></a>   
                                    <div  style="margin-left:-40px;" >
                                        {!! Form::open(['method'=>'PATCH', 'route'=> ['admin.post.approve',$post->id ]] ) !!}
                                         <button class="btnApprove btn btn-info"><span  class="" >approve</span><i class="fa fa-check ml-1  "></i></button>
                                        {!! Form::close() !!}
                                </div> 
                               <div style="margin-top:-31px; margin-left:87px" >
                                   {!! Form::open(['method'=>'DELETE', 'route'=> ['admin.post.destroy',$post->id ]] ) !!} 
                                    <button class="btnDelete btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                                   {!! Form::close() !!}
                               </div> 
                            
                            </td> 
                            </tr>
                            
                        @endforeach
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Task Info -->
   
</div>


@endsection



@push('js')
    
@endpush