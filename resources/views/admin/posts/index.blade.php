@extends('layouts.admin')


@section('content')

    <h1>Posts</h1>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <i class="fa fa-check">  <strong> {{session('message')}} </strong></i>
                    </div>
                @endif

             <table class="table table-responsive">
                 <thead>
                   <tr>
                     <th>Id</th>
                     <th>User</th>
                     <th>Category</th>
                     <th>Photo</th>
                     <th>title</th>
                     <th>body</th>
                     <th>Created at</th>
                     <th>Updated at</th>
                   </tr>
                 </thead>

                 <tbody>
                    @if($posts)
                        @foreach($posts as $post)
                           <tr>
                             <td>{{$post->id}}</td>
                             <td>{{$post->user->name}}</td>
                             <td>{{$post->category->name}}</td>
                             <td><img height="50" src="{{$post->photo? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                             <td>{{$post->title}}</td>
                             <td>{{$post->body}}</td>
                             <td>{{$post->created_at->diffForHumans()}}</td>
                             <td>{{$post->updated_at->diffForHumans()}}</td>
                           </tr>
                         @endforeach
                    @endif
                 </tbody>
             </table>





 @stop
