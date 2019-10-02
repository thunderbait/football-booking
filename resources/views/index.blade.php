@extends('master')

@section('content')

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