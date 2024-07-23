<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>MY CRUD</title>
    {{-- <link rel="stylesheet" href='{{ asset('..resources/css/styles.css') }}'> --}}
</head>
<body>
<div class="flex flex-col min-h-dvh">
    <header class="flex items-center h-16 px-4 border-b shrink-0 md:px-6">
      <nav class="flex-col hidden gap-6 text-lg font-medium md:flex md:flex-row md:items-center md:gap-5 md:text-sm lg:gap-6">
        <a class="flex items-center gap-2 text-lg font-semibold md:text-base" href="{{route('dashboard')}}">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="w-6 h-6"
          >
            <path d="m8 3 4 8 5-5 5 15H2L8 3z"></path>
          </svg>
          <span class="sr-only">My CRUD</span>
        </a>
        <a class="font-bold" href="{{ route('dashboard') }}">
          Home
        </a>
        <a class="text-muted-foreground" href="{{ route('about') }}">
          About
        </a>
        <a class="text-muted-foreground" href="{{ route('products.index') }}">
            Products
          </a>
        <a class="text-muted-foreground" href="{{ route('contact') }}">
          Contact
        </a>
      </nav>
      <div class="flex items-center w-full gap-4 md:ml-auto md:gap-2 lg:gap-4">
        <form class="flex-1 ml-auto sm:flex-initial">
          <div class="relative">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground"
            >
              <circle cx="11" cy="11" r="8"></circle>
              <path d="m21 21-4.3-4.3"></path>
            </svg>
            <input
              class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-8 sm:w-[300px] md:w-[200px] lg:w-[300px]"
              placeholder="Search products..."
              type="search"
            />
          </div>
        </form>
        <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full">
          <img
            src="/placeholder.svg"
            width="32"
            height="32"
            style="aspect-ratio: 32 / 32; object-fit: cover;"
            class="rounded-full"
            alt="Avatar"
          />
          <span class="sr-only">Toggle user menu</span>
        </button>
      </div>
    </header>
    <main class="flex-1">
      @yield('content')
    </main>
    <footer class="bg-muted py-6 px-6 border-t">
      <div class="container max-w-7xl mx-auto flex items-center justify-between">
        <p class="text-sm text-muted-foreground">© 2024 Acme Inc. All rights reserved</p>
        <nav class="flex items-center gap-6">
          <a class="text-sm hover:underline" href="#">
            Terms of Service
          </a>
        </nav>
      </div>
    </footer>
  </div>
</body>
</html>
