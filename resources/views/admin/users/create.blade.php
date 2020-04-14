@extends('layouts.admin')



@section('content')
    <h1>Create Users</h1>

     {!! Form::open(['method'=>'POST', 'action'=>'AdminUserController@store', 'files'=>true]) !!}
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
                     {!! Form::select('role_id', [''=>'Choose Options']+$role,null, ['class'=> 'form-control']) !!}
                 </div>

                <div class="form-group">
                     {!! Form::label('is_active', 'Status') !!}
                     {!! Form::select('is_active', array(1=>'Active', 0=>'Inactive'), 0, ['class'=> 'form-control']) !!}
                 </div>

         {{-- <input type="text" name="title" placeholder="Enter a title for your post"> --}}
                 <div class="form-group">
                     {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                 </div>

     {!! Form::close() !!}

@include('include.formerror')


    @stop
