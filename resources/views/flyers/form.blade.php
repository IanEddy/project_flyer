


	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
	    <label for="street">Street:</label>
	    <input type="text" name="street" class="form-control" id="street">
  	</div>
  	<div class="form-group">
	    <label for="city">City:</label>
	    <input type="text" name="city" class="form-control" id="city">
  	</div>
  	<div class="form-group">
	    <label for="zip">Zip/Postal code:</label>
	    <input type="text" name="zip" class="form-control" id="zip">
  	</div>
  	<div class="form-group">
	    <label for="country">Country:</label>
	    <select class="form-control" name="country" id="country">
	    	@foreach (App\Http\Utilities\Country::all() as $country => $code)
	    		<option value="{{$code}}">{{ $country}}</option>

	    	@endforeach

	    </select>
  	</div>
  	<div class="form-group">
	    <label for="state">State:</label>
	    <input type="text" name="state" class="form-control" id="state">
  	</div>
  	
<hr>
	<div class="form-group">
	    <label for="price">Sale Price:</label>
	    <input type="text" name="price" class="form-control" id="price">
  	</div>
  	<div class="form-group">
	    <label for="description"> Home Description:</label>
	    <textarea name="description" id="description" class="form-control" rows="10"></textarea>
  	</div>
  	
  	<button type="submit" class="btn btn-primary"> Create a Flyer</button>

