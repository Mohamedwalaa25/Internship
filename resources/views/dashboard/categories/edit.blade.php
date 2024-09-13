@extends('layouts.dashboard')
@section('title','Edit-Categories')
@section('breadcrumb','Edit Categories Page')
@section('content')

    <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input value="{{old('title') ?? $category->title}}" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('title')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Details</label>
            <input value="{{old('details') ?? $category->details}}" name="details" type="text" class="form-control" id="exampleInputPassword1">
            @error('details')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
