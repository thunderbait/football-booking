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
        @foreach($timeslots as $timeslot)
        <tr>
            <td>{{$timeslot->id}}</td>
            <td>{{$timeslot->start_time}}</td>
            <td>{{$timeslot->end_time}}</td>
            <td><a href="{{ route('timeslots.edit',$timeslot->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('timeslots.destroy', $timeslot->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection