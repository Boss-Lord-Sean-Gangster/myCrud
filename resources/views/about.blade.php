@extends('layout.layout')

@section('content')
<div class="flex flex-col items-center min-h-screen bg-gray-100 py-8">
    <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-4xl font-semibold mb-6 text-indigo-600">About Us</h1>
        <p class="text-lg text-gray-700 mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor felis a lacus aliquet, in posuere ex vehicula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer vitae mauris dui.
        </p>
        <div class="space-y-4">
            <p class="text-lg text-gray-700 mb-4">
                Vivamus hendrerit nunc nec elit lacinia, vel cursus urna tincidunt. Phasellus et venenatis justo. Duis ac turpis malesuada, pharetra eros vel, malesuada lacus. Nulla facilisi. Nam interdum venenatis odio, eget tempor nulla vestibulum ac.
            </p>
            <p class="text-lg text-gray-700 mb-4">
                Donec fermentum lacus non tortor euismod, eget faucibus erat venenatis. Sed at quam sit amet odio vulputate fringilla. Praesent congue sem vel nulla ultricies, vel consequat sapien sollicitudin. Cras sed orci scelerisque, luctus nisi sit amet, consectetur risus.
            </p>
            <p class="text-lg text-gray-700 mb-8">
                Curabitur tincidunt nisi non tellus auctor, at varius odio scelerisque. Morbi sit amet libero eros. Nulla id purus vel nisi aliquet dictum. Mauris luctus tortor quis velit feugiat, at dignissim nulla suscipit.
            </p>
            <a href="{{ route('products.index') }}" class="block px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                View Our Products
            </a>
        </div>
    </div>
</div>
@endsection
