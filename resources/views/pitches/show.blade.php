@extends('master')

@section('content')

	<h1 class="display-2" style="text-align: center; margin-left: 25px">Pitches Browser</h1>

	<div class="container">
		<div class="row">
			@foreach($pitches as $pitch)	
				<div class="col-4 col-sm-12 col-md-4 col-xl-4">
					@include('pitches/widgets/pitch-cards')
				</div>
				@endforeach
		</div>
	</div>

@endsection