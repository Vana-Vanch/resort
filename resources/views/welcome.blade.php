@extends('layouts.app')
@section('content')
    <div class="container-fluid bg-gradient border-bottom border-2 border-light">
        <div class="container">
            <div class="d-lg-flex align-items-center p-3 thuziak ">
                <div>
                <p>
                     <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, atque!</h1>
                     aklsjd kla akls iw iiw wi wi aklsjdkl ja wijdisajkjiwjqpwoieqp i io iapsd asod iasoi ao lsk; aksdja jkjkjaksdjk 
                     
                </p>
             
                </div>
                <img src="{{ asset('images/web/Summer landscape_Two Color.png') }}" class="img-fluid d-none d-lg-block" alt="">
            </div>
        </div>
    </div>
<section>
    <div class="container text-center my-5 thuziak">
        <h3>Available Resorts</h3>
    </div>
</section>

    <section class="mt-4">
        <div class="container">
            <div class="row">
                @foreach ($resorts as $resort )
                    
           
                <div class="col-md-4 " >
                        <div class="card w-75 items-center m-auto border border-light border-1 rounded-3 p-2 bg-gradient thuziak " style="height: 400px">

                             <img src="{{ asset('images/resorts/'.$resort->display) }}" class="card-img-top img-fluid mt-2 rounded-2" alt="" style="height: 300px;">
                            <div class="card-body">
                                <div class="card-title"><h3>{{$resort->title}}</h3></div>
                                    <p class="card-text">  &#8377 {{ $resort->price }}</p>
                                    <a href="{{ route('detail', $resort->id) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                

             
                    
                </div>    
            </div>
    
                </section>
            @endsection
            
                
                
      