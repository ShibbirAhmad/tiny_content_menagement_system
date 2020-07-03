@extends('backend.master')


@push('css')
    <style>
        { font-size:16px;margin:10px;}
    </style>
@endpush



@section('content')

 
<div class="row clearfix">
    <!-- Task Info -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <h2 class="heading"> <a class="btn btn-info" href="{{route('admin.post.create')}}">Add New Post </a></h2>
                <h4 class="heading">Published Content List </h4>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover dashboard-task-infos">
                        <thead>
                            <tr>
                                <th>SErial No</th>
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
                                <th>SErial No</th>
                                <th>Title</th>
                                <th>Content_type</th>
                                <th>Feature_Image</th>
                                <th>Status</th>
                                <th>Author</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($posts as $key=> $post)
                        
                            <tr>
                                <td>{{$key+1 }}</td>
                                <td>{{ str_limit($post->title,35) }}</td>
                                <td>{{$post->content_type  }}</td>
                                <td>{{$post->feature_img }}</td>

                                <td>
                                    @if ($post->is_approved==true)
                                    <span class="label bg-green">published</span> 
                                    @else
                                    <span class="label bg-pink">pending</span> 
                                    @endif
                                </td>

                                <td> {{$post->author }} </td>
                                <td colspan="2">
                                    <a href="{{route('admin.post.show',$post->id)}}"  class="btn btn-dark "><i class="fa fa-eye"></i></a>   
                                   
                               <div style="margin-top:-33px; margin-left:55px" >
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