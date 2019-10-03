@extends('master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Start Time</td>
          <td>End Time</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->pitch_id}}</td>
            <td>{{$reservation->user_id}}</td>
            <td>{{$reservation->timeslot_id}}</td>
            <td>{{$reservation->date}}</td>
            <td>{{$reservation->paid_for}}</td>
            <td><a href="{{ route('reservations.edit',$reservation->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('reservations.create')}}" class="btn btn-success" style="margin-left: 25px">New</a></td>
<div>
@endsection