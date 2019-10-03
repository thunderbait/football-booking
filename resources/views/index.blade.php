@extends('master')

@section('content')

<h1 class="display-4" style="text-align: center; margin-left: 25px">Golazo - Pitch Booking Services</h1>
<br>

@include('widgets/carousel')
<hr class="featurette-divider">
<p>
@include('widgets/services')
</p>
<hr class="featurette-divider">
<p>
@include('widgets/contact-us')
</p>
<hr class="featurette-divider">
@endsection