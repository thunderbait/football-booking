<div class="card" style="width: 18rem; margin-top: 15px ;margin-bottom: 15px;">
  <img src="{{url('/img/ball.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$partner->name}}</h5>
    <p class='card-text'>Location: {{$partner->location}}<br></p>
    <a href="{{$partner->website}}" class="btn btn-primary">Visit</a>
  </div>
</div>