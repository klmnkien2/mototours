@if(empty($isUpdate))
<tr>
    <td>
        <input type="hidden" name="stage_id[]" value="">
        <input type="text" name="stage_number[]" value="{{ old('stage_number.'.$index) }}" class="form-control"
               required="required" placeholder="{{ trans('Number Ex. 1') }}">
    </td>
    <td>
        <input type="text" name="stage_description[]" value="{{ old('stage_description.'.$index) }}" class="form-control"
               required="required" placeholder="{{ trans('Description') }}">
    </td>
    <td>
        <input type="text" name="stage_from_date[]" value="{{ old('stage_from_date.'.$index) }}" class="form-control dynamic-datepicker"
               required="required" placeholder="{{ trans('From Date') }}">
    </td>
    <td>
        <input type="text" name="stage_to_date[]" value="{{ old('stage_to_date.'.$index) }}" class="form-control dynamic-datepicker"
               required="required" placeholder="{{ trans('To Date') }}">
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"><input class="delete-input" type="hidden" name="stage_delete[]" value=""></i></a></td>
</tr>

@else

<tr>
    <td>
        <input type="hidden" name="stage_id[]" value="{{ $aStage->id }}">
        <input type="text" name="stage_number[]" value="{{ $aStage->number }}" class="form-control"
               required="required" placeholder="{{ trans('Number Ex. 1') }}">
    </td>
    <td>
        <input type="text" name="stage_description[]" value="{{ $aStage->description }}" class="form-control"
               required="required" placeholder="{{ trans('Description') }}">
    </td>
    <td>
        <input type="text" name="stage_from_date[]" value="{{ date_format(new DateTime('@' . strtotime($aStage['from_date'])), 'd-m-Y') }}" class="form-control dynamic-datepicker"
               required="required" placeholder="{{ trans('From Date') }}">
    </td>
    <td>
        <input type="text" name="stage_to_date[]" value="{{ date_format(new DateTime('@' . strtotime($aStage['to_date'])), 'd-m-Y') }}" class="form-control dynamic-datepicker"
               required="required" placeholder="{{ trans('To Date') }}">
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"><input class="delete-input" type="hidden" name="stage_delete[]" value=""></i></a></td>
</tr>
@endif
