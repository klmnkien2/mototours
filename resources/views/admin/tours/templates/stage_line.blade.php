<tr>
    <td>
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
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"></i></a></td>
</tr>
