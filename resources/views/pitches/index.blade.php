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
          <td>Name</td>
          <td>Location</td>
          <td>Size</td>
          <td>Type</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pitches as $pitch)
        <tr>
            <td>{{$pitch->id}}</td>
            <td>{{$pitch->name}}</td>
            <td>{{$pitch->location}}</td>
            <td>{{$pitch->size}}</td>
            <td>{{$pitch->type}}</td>
            <td><a href="{{ route('pitches.edit',$pitch->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('pitches.destroy', $pitch->id)}}" method="post">
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