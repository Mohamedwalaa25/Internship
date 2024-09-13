@extends('layouts.dashboard')
@section('title','Categories')
@section('breadcrumb','Categories Page')
@section('content')
    <div class="mb-5">
        <a href="{{route('categories.create')}}" class="btn btn-sm btn-outline-primary mr-2">Create</a>


    </div>

    <x-alert/>
    <form action="{{URL::current()}}" method="get" class="d-flex justify-content-between mb-4">
        <x-input name="search" placeholder="Name" class="mx-2" :value="request('name')" />

        <button class="brn btn-dark mx-2">Filter</button>

    </form>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Details</th>
            <th>Products_Count</th>
            <th>Created_At</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @if($categories->count() >0)
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{ substr($category->details ,0,40)}}  ....</td>
                    <td>{{$category->products_count ?? 0}}</td>
                    <td>{{$category->created_at}}</td>
                    <td><a href="{{route('categories.edit',$category->id)}}"
                           class="btn btn-sm btn-outline-success">Edit</a></td>
                    <td>
                        <form action="{{route('categories.destroy',$category->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5"> No Categories Found.</td>
            </tr>
        @endif
        </tbody>
    </table>
{{$categories->withQueryString()->links()}}
@endsection
