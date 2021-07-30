@extends('layouts.app')
@section('content')
    <div class="container-md">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="w-50">
                <h3 class="thuziak text-center mb-5">Register</h3>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="my-4">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="my-4">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="my-4">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="my-4">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" class="btn btn-light" value="Register">
                    </div>
                </form>
            </div>
            </div>
            </div>


 
@endsection