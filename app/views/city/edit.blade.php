@extends('layouts.default')

@section('content')

<!--<div class="col-md-4 col-md-offset-4">-->
      <div class="panel panel-info">
        <div class="panel-heading">Update City</div>
        <div class="panel-body">
            {{ Form::open(['method' => 'PUT', 'route' => ['city.update', $model->id]]) }}
            {{ Form::hidden('id',$model->id) }}
            <div class="form-group">
                {{ Form::label('name', $model->labels('name')) }}
                {{ Form::text('name', $model->name, array('class' => 'form-control', 'placeholder' => 'Name Of City')) }}
            </div>
           
            <div class="form-group">
                {{ Form::submit('Save', array('class' => 'btn btn-success')) }}
                {{ HTML::link('city/', 'Cancel', array('class' => 'btn btn-danger')) }}
            </div>
            {{ Form::close() }}
        </div>
      </div>
<!--</div>-->


@stop