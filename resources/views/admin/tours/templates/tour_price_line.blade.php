@if(empty($isUpdate))

<tr>
    <td>
        <input type="hidden" name="tour_price_id[]" value="">
        <!-- Select for motorcycle -->
        <select name="tour_price_motorcycle[]" class="form-control relationship">
            <option value="">{{ trans('--Select motorcycle--') }}</option>
            @foreach($motorList as $motor)
                <option value="{{ $motor->id }}" @if($motor->id == old('tour_price_motorcycle.'.$index)) selected @endif>{{ $motor->name }}</option>
            @endforeach
        </select>
        <!-- /Select for motorcycle -->
    </td>
    <td>
        <!-- Select for type -->
        <select name="tour_price_type[]" class="form-control relationship">
            <option value="">{{ trans('--Select price for--') }}</option>
            @foreach($priceForList as $key => $option)
                <option value="{{ $key }}" @if($key == old('tour_price_type.'.$index)) selected @endif>{{ $option }}</option>
            @endforeach
        </select>
        <!-- /Select for type -->
    </td>
    <td>
        <input type="text" name="tour_price_price[]" value="{{ old('tour_price_price.'.$index) }}" class="form-control" pattern="^(\d)*$"
               required="required" placeholder="{{ trans('Price, number only') }}">
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"><input class="delete-input" type="hidden" name="tour_price_delete[]" value=""></i></a></td>
</tr>

@else

<tr>
    <td>
        <input type="hidden" name="tour_price_id[]" value="{{ $aTourPrice->id }}">
        <!-- Select for motorcycle -->
        <select name="tour_price_motorcycle[]" class="form-control relationship">
            <option value="">{{ trans('--Select motorcycle--') }}</option>
            @foreach($motorList as $motor)
                <option value="{{ $motor->id }}" @if($motor->id == $aTourPrice->motorcycle_id) selected @endif>{{ $motor->name }}</option>
            @endforeach
        </select>
        <!-- /Select for motorcycle -->
    </td>
    <td>
        <!-- Select for type -->
        <select name="tour_price_type[]" class="form-control relationship">
            <option value="">{{ trans('--Select price for--') }}</option>
            @foreach($priceForList as $key => $option)
                <option value="{{ $key }}" @if($key == $aTourPrice->type) selected @endif>{{ $option }}</option>
            @endforeach
        </select>
        <!-- /Select for type -->
    </td>
    <td>
        <input type="text" name="tour_price_price[]" value="{{ $aTourPrice->price }}" class="form-control" pattern="^(\d)*$"
               required="required" placeholder="{{ trans('Price, number only') }}">
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"><input class="delete-input" type="hidden" name="tour_price_delete[]" value=""></i></a></td>
</tr>

@endif