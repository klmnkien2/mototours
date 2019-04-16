@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

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

{!! Form::model($tours, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.tours.update', $tours->id))) !!}

<div class="form-group">
    {!! Form::label('name', 'Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name',$tours->name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('slug', 'Slug', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('slug', old('slug',$tours->slug), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('photo', 'Photo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('photo') !!}
        {!! Form::hidden('photo_w', 4096) !!}
        {!! Form::hidden('photo_h', 4096) !!}

    </div>
</div>

<hr/>
<h3>{{ trans('Add Destination') }}</h3>

<table class="table">
    <tbody id="generatorTourDestination">
    <tr>
        <td>Destination</td>
        <td>Sort</td>
    </tr>
    @if(!$allTourDestination->isEmpty())
        @foreach($allTourDestination as $index => $aTourDestination)
            @include('admin.tours.templates.tour_destination_line', ['index' => $index, 'isUpdate' => true])
        @endforeach
    @else
        @include('admin.tours.templates.tour_destination_line', ['index' => ''])
    @endif
    </tbody>
</table>

<div class="form-group">
    <div class="col-md-12">
        <button type="button" data-generator-id="#generatorTourDestination" data-line-id="#lineTourDestination" class="addInputRow btn btn-success"><i class="fa fa-plus"></i> {{ trans('Add destination') }} </button>
    </div>
</div>

<hr/>

<div class="form-group">
    {!! Form::label('adventure_level', 'Adventure level', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select name="adventure_level" class="form-control">
            <option value="">{{ trans('--Select one--') }}</option>
            @foreach($adventureLevels as $key => $option)
                <option value="{{ $key }}" @if($key == old('adventure_level', $tours->adventure_level)) selected @endif>{{ $option }}</option>
            @endforeach
        </select>
    </div>
</div><div class="form-group">
    {!! Form::label('location', 'Location', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('location', old('location',$tours->location), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description',$tours->description), array('class'=>'form-control ckeditor')) !!}
        
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
    {!! Form::label('riding_day', 'Riding day', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('riding_day', old('riding_day',$tours->riding_day), array('class'=>'form-control')) !!}
        
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
        {!! Form::textarea('itinerary', old('itinerary',$tours->itinerary), array('class'=>'form-control ckeditor')) !!}
        
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
    @if(! $allTourItinerary->isEmpty())
        @foreach($allTourItinerary as $index => $aItinerary)
            @include('admin.tours.templates.itinerary_line', ['index' => $index, 'isUpdate' => true])
        @endforeach
    @else
        @include('admin.tours.templates.itinerary_line', ['index' => '', 'firstEmpty' => true])
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
        {!! Form::textarea('book_info', old('book_info',$tours->book_info), array('class'=>'form-control ckeditor')) !!}
        
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
    @if(! $allTourPrices->isEmpty())
        @foreach($allTourPrices as $index => $aTourPrice)
            @include('admin.tours.templates.tour_price_line', ['index' => $index, 'isUpdate' => true])
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
        {!! Form::textarea('price_info', old('price_info',$tours->price_info), array('class'=>'form-control ckeditor')) !!}
        
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
    @if(! $allTourStages->isEmpty())
        @foreach($allTourStages as $index => $aStage)
            @include('admin.tours.templates.stage_line', ['index' => $index, 'isUpdate' => true])
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
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.tours.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
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

    <table>
        <tbody id="lineTourDestination">
        @include('admin.tours.templates.tour_destination_line', ['index' => ''])
        </tbody>
    </table>
</div>

@endsection

@section('javascript')
    <script src="{{ asset('js/custom/admin.dynamic_table_input.js') }}"></script>
@endsection