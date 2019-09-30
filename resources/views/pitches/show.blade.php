@extends('master')

@section('content')

	<div class="container">
		<div class="row">
			@foreach($cities as $city)
			<div class="col-4">
				@include('widgets/pitch-widgets/city-cards')
			</div>
			@endforeach
		</div>
	</div>

@endsection	