@extends('layout.layout')

@section('content')
<div class="flex flex-col items-center min-h-screen bg-gray-100 py-8">
    <div class="w-full max-w-5xl bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-4 text-center">Product Page</h1>
        @if(session('success'))
        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
        @endif
        <div class="mb-4 text-right">
            <a href="{{ route('products.create') }}" class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Create a Product</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-700">ID</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Name</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Quantity</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Price</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Description</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($products as $product)
                    <tr>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $product->id }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $product->name }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $product->quantity }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $product->price }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $product->description }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                            <a href="{{ route('products.edit', ['product'=>$product]) }}" class="inline-block px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Edit</a>
                            <form action="{{ route('products.delete', ['product'=>$product]) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 cursor-pointer">
                            </form>
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
