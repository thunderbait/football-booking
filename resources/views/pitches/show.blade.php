@extends('master')

@section('content')

	<div class="container">
		<div class="row">
			@foreach($cities as $city)
			<div class="col-4">
				@include('pitches/widgets/city-cards')
			</div>
			@endforeach
		</div>
	</div>

@endsection	