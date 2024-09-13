@extends('layouts.dashboard')
@section('title','Edit Products')
@section('breadcrumb','Edit Products ')
@section('content')

    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">

            @error('name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Brand</label>
            <input value="{{old('brand')}}" name="brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Details</label>
            <input value="{{old('details')}}" name="details" type="text" class="form-control" id="exampleInputPassword1">
            @error('details')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input value="{{old('price')}}" name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                    <option value="{{$category->id}}" @selected(old('category_id') == $category->id)>
                        {{$category->title}}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror

        </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input value="{{old('image')}}" name="image" type="file"  id="image">
                @error('image')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
