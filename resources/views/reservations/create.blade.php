@extends('master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create a booking for pitch with ID
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
      <form method="post" action="{{ route('reservations.store') }}">
          <div class="form-group">
              @csrf
              <label for="pitch_id"> Pitch ID :</label>
              <input type="text" class="form-control" name="pitch_id"/>
          </div>
          <div class="form-group">
              <label for="user_id">User ID :</label>
              <input type="text" class="form-control" name="user_id"/>
          </div>
          <div class="form-group">
              <label for="timeslot_id">Timeslot ID :</label>
              <input type="text" class="form-control" name="timeslot_id"/>
          </div>
          <div class="form-group">
              <label for="date">Date :</label>
              <input type="date" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="paid_for">Pay Now? :</label>
              <input type="text" class="form-control" name="paid_for"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection