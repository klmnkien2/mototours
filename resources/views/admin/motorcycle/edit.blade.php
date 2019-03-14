@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($motorcycle, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.motorcycle.update', $motorcycle->id))) !!}

<div class="form-group">
    {!! Form::label('name', 'name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name',$motorcycle->name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('brand', 'brand', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select name="brand" class="form-control">
            <option value="">{{ trans('--Select one--') }}</option>
            @foreach($motorcycleBrands as $key => $option)
                <option value="{{ $key }}" @if($key == old('brand', $motorcycle->brand)) selected @endif>{{ $option }}</option>
            @endforeach
        </select>
        
    </div>
</div><div class="form-group">
    {!! Form::label('seat_height', 'seat_height', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('seat_height', old('seat_height',$motorcycle->seat_height), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('weight', 'weight', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('weight', old('weight',$motorcycle->weight), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('capacity', 'capacity', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('capacity', old('capacity',$motorcycle->capacity), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('performance', 'performance', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('performance', old('performance',$motorcycle->performance), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('photo', 'Photo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('photo') !!}
        {!! Form::hidden('photo_w', 4096) !!}
        {!! Form::hidden('photo_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description',$motorcycle->description), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.motorcycle.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection