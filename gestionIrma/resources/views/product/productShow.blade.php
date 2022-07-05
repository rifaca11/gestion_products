@extends('layout.app')
@section('content')

<section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
          src="{{ $product->image}}">
        </div>
      </div>

      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $product->name}}</h5>
        <p class="text-gray-700 text-base mb-4">
            {{ $product->description}}
        </p>
        <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900 mx-5">${{ $product->price}}</span>

            <form action="{{route('product@update', $product)}}" method="POST" >
              @csrf
              @method('PUT')
            <button type="submit" class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-2 focus:outline-none hover:bg-blue-600 rounded-full">
              <i class="fa-solid fa-pen-to-square"></i>
            </button>
          </form>
            <form action="{{route('product@destroy', $product)}}" method="POST" >
                @csrf
                @method('DELETE')
            <button type="submit" class="flex ml-5 text-white bg-red-500 border-0 py-2 px-2 focus:outline-none hover:bg-red-600 rounded-full">
                <i class="fa-solid fa-trash-can"></i>   
            </button>
            </form>
          </div>     
        </div>
    </div>

    </div>
  </div>
</section>

@endsection

