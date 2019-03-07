<tr>
    <td>
        <input type="text" name="itinerary_title[]" value="{{ old('itinerary_title.'.$index) }}" class="form-control"
               required="required" placeholder="{{ trans('Title Ex. Day 1') }}">
    </td>
    <td>
        <input type="text" name="itinerary_description[]" value="{{ old('itinerary_description.'.$index) }}" class="form-control"
               required="required" placeholder="{{ trans('Description') }}">
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"></i></a></td>
</tr>
