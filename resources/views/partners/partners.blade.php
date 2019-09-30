@extends('master')

@section('content')

	<div class="container">
		<div class="row">
			@foreach($partners as $partner)
			<div class="col-4">
				@include('widgets/master-widgets/partners-cards')
			</div>
			@endforeach
		</div>
	</div>

@endsection	