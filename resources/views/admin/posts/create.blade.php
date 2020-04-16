@extends('layouts.admin')


@section('content')

    <h1>Create Posts</h1>

            <div class="row">
             {!! Form::open(['method'=>'POST', 'action'=>'AdminPostController@store', 'files'=>true]) !!}
                         @csrf
                         <div class="form-group">
                             {!! Form::label('title', 'Title') !!}
                             {!! Form::text('title', null, ['class'=> 'form-control']) !!}
                         </div>

                         <div class="form-group">
                              {!! Form::label('category_id', 'Category') !!}
                              {!! Form::select('category_id', [''=>'Choose a category']+$category, null,['class'=> 'form-control']) !!}
                         </div>

                         <div class="form-group">
                             {!! Form::label('photo_id', 'Photo') !!}
                             {!! Form::file('photo_id', ['class'=> 'form-control']) !!}
                         </div>

                         <div class="form-group">
                             {!! Form::label('body', 'Description') !!}
                             {!! Form::textarea('body', null, ['class'=> 'form-control']) !!}
                         </div>

                 {{-- <input type="text" name="title" placeholder="Enter a title for your post"> --}}
                         <div class="form-group">
                             {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                         </div>

             {!! Form::close() !!}
            </div>

        <div class="row">
            @include('include.formerror')

        </div>



@stop
