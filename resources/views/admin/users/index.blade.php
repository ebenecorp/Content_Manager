@extends('layouts.admin')


@section('content')
    <h1>Users</h1>

            @if(Session::has('message'))
            <div class="alert alert-success">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span>
                <i class="fa fa-check"></i> <strong> <h5>{{session('message')}}</h5> </strong></span>
            </div>
            @endif

         <div class="table-responsive">
             <table class="table">
                 <thead>
                   <tr>
                     <th>Id</th>
                     <th>Photo</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Role</th>
                     <th>Status</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                   </tr>
                 </thead>
                 <tbody>

                         @if($users)
                             @foreach($users as $user)

        {{--                         @if($user->is_active == 1)--}}
        {{--                            @php   $status = "Active"; @endphp--}}
        {{--                          @else--}}
        {{--                        @php  $status= 'Inactive';  @endphp--}}
        {{--                        @endif--}}
                                   <tr>
                                     <td>{{$user->id}}</td>
                                     <td><img height="50" src="{{$user->photo? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                                     <td><a href="{{route('user.edit', $user->id)}}">{{$user->name}}</a></td>
                                     <td>{{$user->email}}</td>
                                     <td>{{$user->role->name}}</td>
                                     <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
                                     <td>{{$user->created_at->diffForHumans()}}</td>
                                     <td>{{$user->updated_at->diffForHumans()}}</td>
                                   </tr>
                             @endforeach
                           @endif
                 </tbody>
             </table>

         </div>

    @endsection
