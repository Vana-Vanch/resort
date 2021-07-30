@extends('layouts.app')
@section('content')
<div class="container-md">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="w-50">
            <h3 class="thuziak text-center mb-5">Are you sure you want to log out?</h3>
            <form action="{{ route('logout.confirm') }}" method="POST">
                @csrf

                    <input type="submit" class="btn btn-light" value="Logout">
                </div>
            </form>
        </div>
        </div>
        </div>
@endsection