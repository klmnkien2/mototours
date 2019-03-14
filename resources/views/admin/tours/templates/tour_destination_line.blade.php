@if(empty($isUpdate))

<tr>
    <td>
        <input type="hidden" name="tour_destination_rowid[]" value="">
        <!-- Select for destination -->
        <select name="tour_destination_id[]" class="form-control relationship">
            <option value="">{{ trans('--Select destination--') }}</option>
            @foreach($destinationList as $record)
                <option value="{{ $record->id }}" @if($record->id == old('tour_destination_id.'.$index)) selected @endif>{{ $record->name }}</option>
            @endforeach
        </select>
        <!-- /Select for destination -->
    </td>
    <td>
        <input type="text" name="tour_destination_sort[]" value="{{ old('tour_destination_sort.'.$index) }}" class="form-control" pattern="^(\d)*$"
               required="required" placeholder="{{ trans('Sort value') }}">
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"><input class="delete-input" type="hidden" name="tour_destination_delete[]" value=""></i></a></td>
</tr>

@else

<tr>
    <td>
        <input type="hidden" name="tour_destination_rowid[]" value="{{ $aTourDestination->id }}">
        <!-- Select for destination -->
        <select name="tour_destination_id[]" class="form-control relationship">
            <option value="">{{ trans('--Select destination--') }}</option>
            @foreach($destinationList as $record)
                <option value="{{ $record->id }}" @if($record->id == $aTourDestination->destination_id) selected @endif>{{ $record->name }}</option>
            @endforeach
        </select>
        <!-- /Select for destination -->
    </td>
    <td>
        <input type="text" name="tour_destination_sort[]" value="{{ $aTourDestination->sort }}" class="form-control" pattern="^(\d)*$"
               required="required" placeholder="{{ trans('Sort value') }}">
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"><input class="delete-input" type="hidden" name="tour_destination_delete[]" value=""></i></a></td>
</tr>

@endif