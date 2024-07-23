@extends('layout.layout')

@section('content')
<div class="flex flex-col items-center min-h-screen bg-gray-100 py-8">
    <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-4xl font-semibold mb-6 text-indigo-600">Welcome to the Home Page</h1>
        <p class="text-lg text-gray-700 mb-8">
            Explore our products, learn more about our services, and get in touch with us.
        </p>
        <div class="space-y-4">
            <a href="{{ route('products.index') }}" class="block px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                View Products
            </a>
            <a href="{{ route('about') }}" class="block px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Learn More About Us
            </a>
            <a href="{{ route('contact') }}" class="block px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                Contact Us
            </a>
        </div>
    </div>
</div>
@endsection
