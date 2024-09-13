@extends('layouts.dashboard')
@section('title','Show Products')
@section('breadcrumb','Show Products ')
@section('content')
<center>
    <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/'.$product->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->details}}.</p>
            <a href="{{route('products.index')}}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</center>
@endsection
