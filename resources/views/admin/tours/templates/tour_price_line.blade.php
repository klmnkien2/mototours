<tr>
    <td>
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
        <input type="text" name="tour_price_price[]" value="{{ old('tour_price_price.'.$index) }}" class="form-control"
               required="required" placeholder="{{ trans('Price') }}">
    </td>
    <td><a href="#" class="rem btn btn-danger"><i class="fa fa-minus"></i></a></td>
</tr>
