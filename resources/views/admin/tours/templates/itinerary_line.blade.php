@if(empty($isUpdate))
<tr>
    <td>
        <input type="hidden" name="itinerary_id[]" value="">
        <input type="text" name="itinerary_title[]" value="{{ old('itinerary_title.'.$index) }}" class="form-control"
               required="required" placeholder="{{ trans('Title Ex. Day 1') }}">
    </td>
    <td>
	{!! Form::textarea('itinerary_description[]', old('itinerary_description.'.$index), array('id'=> 'itinerary_description_' . bin2hex(random_bytes(10)), 'class'=>'form-control' . (!empty($firstEmpty)?' ckeditor':'') )) !!}
       
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"><input class="delete-input" type="hidden" name="itinerary_delete[]" value=""></i></a></td>
</tr>
@else
<tr>
    <td>
        <input type="hidden" name="itinerary_id[]" value="{{ $aItinerary->id }}">
        <input type="text" name="itinerary_title[]" value="{{ $aItinerary->title }}" class="form-control"
               required="required" placeholder="{{ trans('Title Ex. Day 1') }}">
    </td>
    <td>
	{!! Form::textarea('itinerary_description[]', $aItinerary->description, array('id'=> 'itinerary_description_' . $index, 'class'=>'form-control ckeditor')) !!}
      
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"><input class="delete-input" type="hidden" name="itinerary_delete[]" value=""></i></a></td>
</tr>
@endif