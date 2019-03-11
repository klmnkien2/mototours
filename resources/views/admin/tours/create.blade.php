@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if(Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li class="error">{{ Session::get('error') }}</li>
                </ul>
            </div>
        @endif

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => config('quickadmin.route').'.tours.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('name', 'Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('location', 'Location', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('location', old('location'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('start_finish', 'Start/Finish', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('start_finish', old('start_finish'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('nearest_airport', 'Nearest Airport', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('nearest_airport', old('nearest_airport'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('duration', 'Duration', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('duration', old('duration'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('route', 'Route', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('route', old('route'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('accommodation', 'Accommodations', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('accommodation', old('accommodation'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('rest_day', 'Rest day', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('rest_day', old('rest_day'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('highlights', 'Highlights', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('highlights', old('highlights'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('minimum_participant', 'Minimum number of participants', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('minimum_participant', old('minimum_participant'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('itinerary', 'Itinerary', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('itinerary', old('itinerary'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>
<hr/>
<h3>{{ trans('Add Itinerary') }}</h3>

<table class="table">
    <tbody id="generatorItinerary">
    <tr>
        <td>Title</td>
        <td>Description</td>
    </tr>
    @if(old('itinerary_title'))
        @foreach(old('itinerary_title') as $index => $fieldName)
            @include('admin.tours.templates.itinerary_line', ['index' => $index])
        @endforeach
    @else
        @include('admin.tours.templates.itinerary_line', ['index' => ''])
    @endif
    </tbody>
</table>

<div class="form-group">
    <div class="col-md-12">
        <button type="button" data-generator-id="#generatorItinerary" data-line-id="#lineItinerary" class="addInputRow btn btn-success"><i class="fa fa-plus"></i> {{ trans('Add Itinerary') }} </button>
    </div>
</div>

<hr/>

<div class="form-group">
    {!! Form::label('book_info', 'Book info', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('book_info', old('book_info'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>

<hr/>
<h3>{{ trans('Add Tour Prices') }}</h3>

<table class="table">
    <tbody id="generatorTourPrice">
    <tr>
        <td>Motorcycle</td>
        <td>Price for</td>
        <td>Price ($)</td>
    </tr>
    @if(old('tour_price_motorcycle'))
        @foreach(old('tour_price_motorcycle') as $index => $fieldName)
            @include('admin.tours.templates.tour_price_line', ['index' => $index])
        @endforeach
    @else
        @include('admin.tours.templates.tour_price_line', ['index' => ''])
    @endif
    </tbody>
</table>

<div class="form-group">
    <div class="col-md-12">
        <button type="button" data-generator-id="#generatorTourPrice" data-line-id="#lineTourPrice" class="addInputRow btn btn-success"><i class="fa fa-plus"></i> {{ trans('Add tour price') }} </button>
    </div>
</div>

<hr/>

<div class="form-group">
    {!! Form::label('price_info', 'Price info', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('price_info', old('price_info'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>

<hr/>
<h3>{{ trans('Add Stages') }}</h3>

<table class="table">
    <tbody id="generatorStage">
    <tr>
        <td>No.</td>
        <td>Description</td>
        <td>From Date</td>
        <td>To Date</td>
    </tr>
    @if(old('stage_number'))
        @foreach(old('stage_number') as $index => $fieldName)
            @include('admin.tours.templates.stage_line', ['index' => $index])
        @endforeach
    @else
        @include('admin.tours.templates.stage_line', ['index' => ''])
    @endif
    </tbody>
</table>

<div class="form-group">
    <div class="col-md-12">
        <button type="button" data-generator-id="#generatorStage" data-line-id="#lineStage" class="addInputRow btn btn-success"><i class="fa fa-plus"></i> {{ trans('Add a Stage') }} </button>
    </div>
</div>

<hr/>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

<div style="display: none;">
    <table>
        <tbody id="lineItinerary">
        @include('admin.tours.templates.itinerary_line', ['index' => ''])
        </tbody>
    </table>

    <table>
        <tbody id="lineStage">
        @include('admin.tours.templates.stage_line', ['index' => ''])
        </tbody>
    </table>

    <table>
        <tbody id="lineTourPrice">
        @include('admin.tours.templates.tour_price_line', ['index' => ''])
        </tbody>
    </table>
</div>

@endsection

@section('javascript')
    <script src="{{ asset('js/custom/admin.dynamic_table_input.js') }}"></script>
@endsection