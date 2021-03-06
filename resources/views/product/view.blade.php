@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ $product->image }}" alt=""> <br>
                <button class="btn btn-primary mt-3">Buy</button>
            </div>
            <div class="col-md-9">
                <b>Name:</b> {{ $product->name }} <hr><br>
                <b>Price:</b> <del> {{ $product->price }}</del> <hr><br>
                <b>Discount:</b> {{ $product->discount }} <hr><br>
                <b>New Price:</b> {{ $product->price*(100- $product->discount)/100  }} <hr><br>
                <b>Description:</b> 
                <p>{{ $product->description }}</p>
            </div>
        </div>
        
    </div>
@endsection