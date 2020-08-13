@extends('layouts.app')

@section('title', '商品列表')

@section('content')
    {{-- Code Listing 2.5 --}}
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            <div class="flex flex-col break-words bg-white border rounded shadow-md">
                <h2 class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    商品列表
                </h2>

                <div class="w-full p-6">
                    <ul class="w-56 max-w-full space-y-6">
                        @foreach ($products as $product)
                            <li class="flex justify-between items-center font-light">
                                <div class="flex text-lg">
                                    <svg class="h2 w-2 text-blue-600 mx-2" viewBox="0 0 8 8" fill="currentColor">
                                      <circle cx="4" cy="4" r="3" />
                                    </svg>
                                    <span>{{ $product->name }}</span>
                                </div>
                                <span class="text-gray-400">${{ $product->unit_price }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
