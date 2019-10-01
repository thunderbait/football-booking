@extends('master')

@section('content')

	<div class="container">
		<div class="row">
			@foreach($pitches as $pitch)
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				@include('pitches/widgets/pitch-cards')
			</div>
			@endforeach
		</div>
	</div>

@endsection	