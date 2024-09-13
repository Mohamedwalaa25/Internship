<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            <form action="{{URL::current()}}" method="get" class="d-flex justify-content-between mb-4">
                <x-input name="search" placeholder="Name" class="mx-2" :value="request('name')" />

                <button class="brn btn-dark mx-2">Filter</button>

            </form>
        </h2>

    </x-slot>
<br>
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach($products as $product)
            <div style="width: 18rem; border: 1px solid white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f9f9f9;">
                <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->name}}" style="width: 100%; height: auto;">
                <div style="padding: 15px;">
                    <h5 style="margin: 0 0 10px 0; font-size: 18px;">{{$product->name}}</h5>
                    <h3 style="margin: 0 0 10px 0; font-size: 18px;">{{$product->category->title}}</h3>
                    <p style="margin: 0 0 15px 0; font-size: 14px; color: #333;">{{$product->details}}.</p>
                    <a href="#" style="display: inline-block; padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">Shop Now</a>
                </div>
            </div>
        @endforeach
    </div>



    {{$products->withQueryString()->links()}}

</x-app-layout>
