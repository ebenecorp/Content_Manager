@extends('layouts.admin')



@section('content')
    <h1>Edit Users</h1>

        <div class="row">
                <div class="col-sm-3">
                    <img src="{{$user->photo? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">


                </div>

                <div class="col-sm-9">
                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUserController@update', $user->id], 'files'=>true]) !!}
                        @csrf
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password',  ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo_id', 'Photo') !!}
                            {!! Form::file('photo_id',  ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('role_id', 'Role') !!}
                            {!! Form::select('role_id',$role,null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('is_active', 'Status') !!}
                            {!! Form::select('is_active', array(1=>'Active', 0=>'Inactive'), null, ['class'=> 'form-control']) !!}
                        </div>

                        {{-- <input type="text" name="title" placeholder="Enter a title for your post"> --}}
                        <div class="form-group">
                            {!! Form::submit('Update User', ['class'=>'btn btn-primary pull-left' ]) !!}
                        </div>

                        {!! Form::close() !!}

                         {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUserController@destroy', $user->id]]) !!}
                                     <div class="form-group">
                                         {!! Form::submit('Delete User', ['class'=>'btn btn-danger pull-right']) !!}
                                     </div>
                         {!! Form::close() !!}

                </div>
        </div>

        <div class="row">
            @include('include.formerror')
        </div>

@stop
