@extends('layouts.app')
@section('content')
<h3 class="thuziak text-center mt-4">Hello</h3>
    <div class="container">
        <div class="thuziak m-auto pb-5" style="width:400px;">
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="my-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
                </div>
                <div class="my-3">
                <label for="contact">Contact</label>
                <input type="number" class="form-control" name="contact">
            </div>
            <div class="my-3">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="my-3">
                <label for="resortName">Resort</label>
                <input type="text" class="form-control" name="resortName" value="{{ $resort->title }}" readonly>
            </div>
            <div class="my-3">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $resort->price }}" readonly>
            </div>
            <div class="my-3 text-center">
                <input type="submit" class="btn btn-light btn-lg" value="Book">
            </div>
            
            </form>
            <div class="my-5">
                <table class="table table-striped table-light">
                    <thead>
                        <tr>
                    
                          <th scope="col">Name</th>
                          <th scope="col">Date</th>
                          <th scope="col">Contact</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($bookings as $booking)
                              
                          
                        <tr>
                     
                          <td>{{ $booking->name }}</td>
                          <td>{{ $booking->date }}</td>
                          <td>{{ $booking->contact }}</td>
                        </tr>
                        @endforeach
             
                      </tbody>
                  </table>
            </div>
        </div>
        </div>
    @endsection

      