@extends('layouts.app')
@section('content')
<div class="container-fluid bg-dark" style="height: 100vh;">
<div class="container mt-4 pt-3 w-75">
        <h2 class="thuziak text-center my-3">Upload Images</h2>
      @if(session()->has('success'))
          <div class="alert alert-success">
              {{ session()->get('success') }}
          </div>
      @endif
  
      <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <input type="file" name="images[]" multiple class="form-control" accept="image/*">
            @if ($errors->has('files'))
              @foreach ($errors->get('files') as $error)
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $error }}</strong>
              </span>
              @endforeach
            @endif
        </div>
        <input type="text" value="{{ $passId }}" name="passId" readonly>
        <div class="form-group my-3 text-center">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
  </div>
</div>
@endsection