<div class="card" style="width:18rem; margin-top: 15px; margin-bottom: 15px;">
  <img  class="card-img-top" src="{{$partner->logo}}" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$partner->name}}</h5>
    <p class='card-text'>Location: {{$partner->location}}<br></p>
    <a href="{{$partner->website}}" target="_blank" class="btn btn-primary">Visit Website</a>
  </div>
</div>