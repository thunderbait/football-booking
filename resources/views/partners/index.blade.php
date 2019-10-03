@extends('master')

@section('content')

	<h1 style="margin-left: 35px">Our Partners</h1>

	<div class="container">
		<div class="row">
			@foreach($partners as $partner)
			<div class="col-12 col-sm-12 col-md-6 col-xl-4">
				@include('partners/widgets/partners-cards')
			</div>
			@endforeach
		</div>
	</div>

@endsection