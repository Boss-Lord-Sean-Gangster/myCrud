@extends('layout.layout')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-4 text-center">Product EDIT Page</h1>
        <form action="{{ route('products.update', ['product' => $product]) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div class="flex flex-col">
                <label for="name" class="mb-2 text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" placeholder="Name" id="name" required value="{{ $product->name }}"
                       class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div class="flex flex-col">
                <label for="quantity" class="mb-2 text-sm font-medium text-gray-700">Quantity</label>
                <input type="number" name="quantity" placeholder="Quantity" id="quantity" required value="{{ $product->quantity }}"
                       class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div class="flex flex-col">
                <label for="price" class="mb-2 text-sm font-medium text-gray-700">Price</label>
                <input type="text" name="price" placeholder="Price" id="price" required value="{{ $product->price }}"
                       class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div class="flex flex-col">
                <label for="description" class="mb-2 text-sm font-medium text-gray-700">Description</label>
                <input type="text" name="description" placeholder="Description" id="description" value="{{ $product->description }}"
                       class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <input type="submit" value="Update"
                       class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            </div>
        </form>
    </div>
</div>
@endsection
