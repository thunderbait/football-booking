@extends('master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit reservation
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
      <form method="post" action="{{ route('reservations.update', $reservation->id) }}">
          <div class="form-group">
              @method('PUT')
              @csrf
              <label for="pitch_id">Pitch ID :</label>
              <input type="text" class="form-control" name="pitch_id" value="{{ $reservation->pitch_id }}" />
          </div>
          <div class="form-group">
              <label for="user_id">User ID :</label>
              <input type="text" class="form-control" name="user_id" value="{{ $reservation->user_id }}" />
          </div>
          <div class="form-group">
              <label for="timeslot_id">Timeslot ID :</label>
              <input type="text" class="form-control" name="timeslot_id" value="{{ $reservation->timeslot_id }}" />
          </div>
          <div class="form-group">
              <label for="date">Date :</label>
              <input type="date" class="form-control" name="date" value="{{ $reservation->date }}" />
          </div>
          <div class="form-group">
              <label for="paid_for">Paid for :</label>
              <input type="text" class="form-control" name="paid_for" value="{{ $reservation->paid_for }}" />
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection