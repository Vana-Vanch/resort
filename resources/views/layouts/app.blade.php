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
    @yield('content')
    @include('inc.footer')
    
    {{-- jsfiles --}}
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('font/js/all.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('chart.js/dist/chart.js') }}"></script>

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

{{-- Add resort location --}}
<script>
function initMap() {
  const myLatlng = { lat: 23.7307, lng: 92.7173 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 13,
    center: myLatlng,
  });
  let infoWindow = new google.maps.InfoWindow({
    position: myLatlng,
  });
  map.addListener("click", (mapsMouseEvent) => {
    infoWindow.close();
    infoWindow = new google.maps.InfoWindow({
      position: mapsMouseEvent.latLng,
    });
    infoWindow.setContent(
      JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
    );
    var location = mapsMouseEvent.latLng.toJSON()
    console.log("Latitude: "+location.lat)
    console.log("Longitude: "+location.lng)
    var marker = new google.maps.Marker({
      position: {lat: location.lat, lng: location.lng},
      map:map
    });
    document.getElementById('lat').value = location.lat;
    document.getElementById('lng').value = location.lng;
  });
}
</script>



</body>
</html>
  
 
      

     
    