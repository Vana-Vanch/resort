<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <style>
        .map{
          height: 400px;
        
        }
      </style>
    <title>Document</title>
</head>
<body class="bg-gradient">
    @include('inc.navbar')
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
        
    <div class="accordion accordion-light" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Reviews
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          @foreach ($reviews as $review)
      
          <div class="accordion-body border-bottom border-1 border-light">    <small class="text-muted">{{$review->name}} {{$review->created_at->diffForHumans() }}:
          </small><br>{{ $review->body }}</div>
          @endforeach
            
          
          <div class="accordion-body"><form action="{{ route('review') }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="body">
            <input type="text" name="resortId" value="{{ $resort->id }}" readonly hidden>  
            <div class="mt-3">

              <input type="submit" class="btn btn-light" value="Comment">
            </div>
          </form></div>
        </div>
      </div>
     
      </div>
    </div>
  </div>
    @include('inc.footer')
    {{-- @include('inc.footer') --}}
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('font/js/all.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    {{-- Ck editor --}}
    <script type="text/javascript">
        $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
    </script>
{{-- End Ckeditor --}}
{{-- import google map api --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfRbk9h54iut-MeTDJjxeTL02bNeKKSVE&callback=initMap&libraries=&v=weekly" async
></script>
{{-- end google map api --}}

{{-- Display Resort Loc--}}
<script>
let map;
var lat = document.getElementById('location0').value;
var lng = document.getElementById('location1').value;
        console.log("This is lattitude"+lat);
        console.log("This is longitude"+lng);
        var newLat = parseFloat(lat);
        var newLng = parseFloat(lng);

function initMap() {
  map = new google.maps.Map(document.getElementById("resmap"), {
    center: { lat: newLat, lng: newLng},
    zoom: 13,

 
  });
  var marker = new google.maps.Marker({
      position: {lat: newLat, lng: newLng},
      map:map
    });
}
</script>
</body>
</html>
  
 


      

     
    