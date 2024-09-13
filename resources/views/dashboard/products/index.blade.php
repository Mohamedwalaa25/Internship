@extends('layouts.dashboard')
@section('title','Products')
@section('breadcrumb','Products Page')
@section('content')
    <div class="mb-5">
        <a href="{{route('products.create')}}" class="btn btn-sm btn-outline-primary mr-2">Create</a>


    </div>

    <x-alert/>
    <form action="{{URL::current()}}" method="get" class="d-flex justify-content-between mb-4">
        <x-input name="search" placeholder="Name" class="mx-2" :value="request('name')" />

        <button class="brn btn-dark mx-2">Filter</button>

    </form>

    <table class="table">
        <thead>
        <tr>
            <th>Image</th>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Details</th>
            <th>Created_At</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @if($products->count()>0)
            @foreach($products as $product)
                <tr>
                    <td><img src="{{asset('storage/'.$product->image)}}" height="50" alt=""/></td>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->brand}}</td>
                    <td>{{$product->category->title}}</td>
                    <td>{{substr($product->details,0,20)}} ..</td>
                    <td>{{$product->created_at}}</td>
                    <td><a href="{{route('products.edit',$product->id)}}"
                           class="btn btn-sm btn-outline-success">Edit</a></td>
                    <td>

                    <td><a href="{{route('products.show',$product->id)}}"
                           class="btn btn-sm btn-outline-dark">Show</a></td>
                    <td>
                        <form action="{{route('products.destroy',$product->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9"> No products Found.</td>
            </tr>
        @endif
        </tbody>
    </table>
    {{$products->withQueryString()->links()}}
@endsection
