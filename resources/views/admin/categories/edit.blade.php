@extends('layouts.admin')


@section('content')

    <h1>Categories</h1>

    <div class="col-sm-5">
        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-submit">
            {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-2']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

        <div class="form-submit">
            {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-2']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@stop