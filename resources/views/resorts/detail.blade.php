@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="thuziak text-center mt-4">{{ $resort->title }}</h3>
        <div class="row mt-5" style="height: 400px;">
            <div class="col-md-6 thuziak text-center">
                    <p class="lead">Price: &#8377 {{ $resort->price }} /day</p>
                    <p class="lead">Contact: {{ $resort->contact }} </p>
                    <p class="lead">{!! $resort->description !!}</p>
                    <a href="{{ route('bookings', $resort) }}" class="btn btn-light">Book now!!</a>
            </div>

            <div class="col-md-6" id="resmap"></div>
        </div>

  {{-- Location --}}
    @foreach ($locations as $address)
    <div class="d-none">
        {{ $i = 0 }}
    </div>
   
        @foreach ($address->location as $latlng)
        <input type="text" id="location{{$i}}" class="d-none" value="{{ $latlng }}">
        
            <div class="d-none">
                {{ $i = $i + 1 }}
            </div>
          
        @endforeach
    @endforeach
    {{-- End Location --}}
    <h4 class="thuziak mt-4">Gallery</h4>
    <div class="row border border-light border-3 my-4">
      
      

      @foreach ($images as $image)
      <div class="col-md-3">
          <img src="{{ asset($image->path) }}" class="img-fluid my-3" alt="Pics" style="height: 250px; width: 300px">
        </div>
      @endforeach
    </div>
</div>
   
@endsection