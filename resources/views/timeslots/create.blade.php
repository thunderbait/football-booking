@extends('master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Timeslot
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
      <form method="post" action="{{ route('timeslots.store') }}">
          <div class="form-group">
              @csrf
              <label for="start_time"> Start-Time :</label>
              <input type="text" class="form-control" name="start_time"/>
          </div>
          <div class="form-group">
              <label for="end_time">End-Time :</label>
              <input type="text" class="form-control" name="end_time"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection