@extends('layouts.app')
@section('content')
    <div class="container">
        <h4 class="thuziak text-center my-5">Add Resort</h4>
        <div class="resort-form-container">
            <form action="{{ route('addresort.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="my-3">
                    <input type="text" class="form-control" name="contact" placeholder="Contact">
                </div>
                <div class="my-3">
                    <input type="number" class="form-control" name="price" placeholder="Price">
                </div>
                <div class="my-3">
                    <input type="file" class="form-control" name="file">
                </div>
            
                <div class="my-3">
                <textarea name="description" class="ckeditor " cols="30" rows="20"></textarea>
          
                      
                </div >
         
                </div>
           
                <div class="my-3 text-center">
                    <input type="submit" class="btn btn-light">
                </div>
            </form>
        </div>  
    </div>

@endsection
