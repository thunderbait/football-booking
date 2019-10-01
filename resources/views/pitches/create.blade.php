@extends('master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Pitch
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('pitches.store') }}">
          <div class="form-group">
              @csrf
              <label for="name"> Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="location">Location :</label>
              <input type="text" class="form-control" name="location"/>
          </div>
          <div class="form-group">
              <label for="size">Size:</label>
              <select name="size">
                  <option value="11x11">11x11</option>
                  <option value="7x7">7x7</option>
                  <option value="5x5">5x5</option>
              </select>
          </div>
          <div class="form-group">
              <label for="type">Type:</label>
                <select name="type">
                  <option value="grass">Grass</option>
                  <option value="3g">3G</option>
                  <option value="astro">Astro</option>
                </select>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection