@extends('layouts.app')
@section('content')
<div class="container">
<h1 class="text-center thuziak my-5">Set Location</h1>
<form action="{{ route('location.store') }}" method="POST">
  @csrf
    <div class="my-3">
      
      <div id="map" style="height: 400px; width:500px;">


        </div>
        <div>
            <input type="text" name="lat" id="lat" hidden>
            <input type="text" name="lng" id="lng" hidden>
            <input type="text" value="{{ $passId }}" name="passId" readonly hidden>
            <div class="my-4 text-center">
                <input type="submit" class="btn btn-light" value="Confirm">
            </div>


</form>
</div>

@endsection
