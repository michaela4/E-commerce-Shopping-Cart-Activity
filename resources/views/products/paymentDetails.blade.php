@extends('layoutProject.noSideHeader')

@section('content')
<!--For Billing Information-->
	<div class="col-md-8"><br>
		<h2><br>Payment Details</h2><br>
			<form method="POST" action="/saveShippingInfo"> 
				{{ csrf_field() }}
					
				<h4><br>Shipping address</h4><br>
					<div class="form-group">
						<input type="text" placeholder="Company (optional) " class="form-control" id="company" name="company">
					</div>
					<div class="form-group">
						<input type="text" placeholder="Address" class="form-control" id="address" name="address" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Postal Code" class="form-control" id="postal_code" name="postal_code" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Phone (optional)" class="form-control" id="phone" name="phone" required>
					</div>
					<input type="checkbox" name="save">
					<h5>Save this information for next time</h5>

					@include('layoutProject.errors')

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Continue to shipping Method</button>
					</div><br>
			</form>
			<a href="/cart" class="btn btn-primary">
		    	Return to Cart
			</a><br><br>
	</div>

	
	<div class="col-md-4"><br>
	</div>


@endsection
