@extends('layout.layout')

@section('content')
<div class="flex flex-col items-center min-h-screen bg-gray-100 py-8">
    <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-4xl font-semibold mb-6 text-indigo-600">Contact Us</h1>
        <form action="#" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
                <input type="email" name="email" id="email" placeholder="Your Email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="message" class="block text-lg font-medium text-gray-700 mb-2">Message</label>
                <textarea name="message" id="message" rows="5" placeholder="Your Message" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>
            <div>
                <input type="submit" value="Send Message"
                    class="w-full px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </form>
    </div>

    <div class="w-full max-w-3xl bg-white mt-8 p-8 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-semibold mb-6 text-indigo-600">Our Address</h2>
        <p class="text-lg text-gray-700">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor felis a lacus aliquet, in posuere ex vehicula.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer vitae mauris dui.
        </p>
        <p class="text-lg text-gray-700 mt-4">
            1234 Lorem Ipsum Street, Dolor Sit Amet, Consectetur Adipiscing, 56789
        </p>
    </div>
</div>
@endsection
