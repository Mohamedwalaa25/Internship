@extends('layouts.dashboard')
@section('title','Create Categories')
@section('breadcrumb','Create Categories ')
@section('content')

    <form method="post" action="{{route('categories.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input value="{{old('title')}}" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('title')
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
