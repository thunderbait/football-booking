@extends('master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit timeslot
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
      <form method="post" action="{{ route('timeslots.update', $timeslot->id) }}">
          <div class="form-group">
              @method('PUT')
              @csrf
              <label for="start_time">Start-Time :</label>
              <input type="text" class="form-control" name="start_time" value="{{ $timeslot->start_time }}" />
          </div>
          <div class="form-group">
              <label for="location">End-Time :</label>
              <input type="text" class="form-control" name="end_time" value="{{ $timeslot->end_time }}" />
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection