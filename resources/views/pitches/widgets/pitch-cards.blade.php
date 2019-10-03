<div class="card" style="width: 18rem; margin-top: 15px ;margin-bottom: 15px;">
	<img src="{{url('/img/ball.jpg')}}" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title">{{$pitch->id}} - {{$pitch->name}}</h5>
		<p class='card-text'>Location: {{$pitch->location}}<br>Size: {{$pitch->size}}<br>Type: {{$pitch->type}}<p>
		<a href="/reservations/create" class="btn btn-primary">Book</a>
	</div>
</div>