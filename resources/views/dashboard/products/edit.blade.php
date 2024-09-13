@extends('layouts.dashboard')
@section('title','Create Products')
@section('breadcrumb','Create Products ')
@section('content')

    <form method="post" action="{{route('products.update',$product)}}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') ??$product->name }}" class="form-control" id="name">

            @error('name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Brand</label>
            <input value="{{old('brand') ?? $product->brand}}" name="brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Details</label>
            <input value="{{old('details') ?? $product->details}}" name="details" type="text" class="form-control" id="exampleInputPassword1">
            @error('details')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input value="{{old('price') ?? $product->price}}" name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('price')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
        <label  for="category_id">Select Category</label>
            <select name="category_id" id="category_id">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @selected(old('category_id')??$product->category_id == $category->id)>
                        {{$category->title}}
                    </option>
                @endforeach
            </select>
        </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input value="{{old('image') ?? $product->image}}" name="image" type="file"  id="image">
                @error('image')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
