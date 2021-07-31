@extends('layouts.app')
@section('content')
<div class="container">
<h1 class="text-center thuziak my-5">Set Location</h1>
<form action="{{ route('location.store') }}" method="POST">
  @csrf
    <div class="my-3">
      
      <div id="map" style="height: 400px;">


        </div>
        <div>
            <input type="text" name="lat" id="lat">
            <input type="text" name="lng" id="lng">
            <div class="my-4 text-center">
                <input type="submit" class="btn btn-light" value="Confirm">
            </div>


</form>
</div>

@endsection