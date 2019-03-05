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

{!! Form::model($tours, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.tours.update', $tours->id))) !!}

<div class="form-group">
    {!! Form::label('name', 'Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name',$tours->name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('location', 'Location', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('location', old('location',$tours->location), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description',$tours->description), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('start_finish', 'Start/Finish', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('start_finish', old('start_finish',$tours->start_finish), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('nearest_airport', 'Nearest Airport', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('nearest_airport', old('nearest_airport',$tours->nearest_airport), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('duration', 'Duration', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('duration', old('duration',$tours->duration), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('route', 'Route', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('route', old('route',$tours->route), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('accommodation', 'Accommodations', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('accommodation', old('accommodation',$tours->accommodation), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('rest_day', 'Rest day', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('rest_day', old('rest_day',$tours->rest_day), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('highlights', 'Highlights', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('highlights', old('highlights',$tours->highlights), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('minimum_participant', 'Minimum number of participants', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('minimum_participant', old('minimum_participant',$tours->minimum_participant), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('itinerary', 'Itinerary', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('itinerary', old('itinerary',$tours->itinerary), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('book_info', 'Book info', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('book_info', old('book_info',$tours->book_info), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('price_info', 'Price info', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price_info', old('price_info',$tours->price_info), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.tours.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection