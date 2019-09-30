@extends('master')

@section('content')

	<div class="container">
		<div class="row">
			@foreach($pitches as $pitch)
			<div class="col-4">
				@include('widgets/pitch-widgets/pitch-cards')
			</div>
			@endforeach
		</div>
	</div>

@endsection	