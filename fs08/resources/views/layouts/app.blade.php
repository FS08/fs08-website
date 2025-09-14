<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'fs08') }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <meta name="theme-color" content="#111827">
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="font-sans antialiased bg-gradient-to-b from-gray-900 via-gray-900 to-black text-gray-100 min-h-screen">
    <nav class="fixed top-0 inset-x-0 z-50 border-b border-gray-800 bg-gray-900/80 backdrop-blur supports-[backdrop-filter]:bg-gray-900/60">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
          <img src="{{ asset('favicon.svg') }}" alt="FS08" class="h-12 w-12 rounded">
        </a>
        <!-- Desktop nav -->
        <div class="hidden md:flex items-center gap-2">
          @php
            $linkBase = 'px-3 py-2 rounded-md text-sm font-medium transition-colors';
            $hover = 'hover:bg-gray-800 hover:text-white text-gray-300';
            $active = 'bg-indigo-600 text-white shadow';
          @endphp
          <a href="{{ route('home') }}" class="{{ $linkBase }} {{ request()->routeIs('home') ? $active : $hover }}">Home</a>
          <a href="{{ route('about') }}" class="{{ $linkBase }} {{ request()->routeIs('about') ? $active : $hover }}">About</a>
          <a href="{{ route('projects') }}" class="{{ $linkBase }} {{ request()->routeIs('projects') ? $active : $hover }}">Projects</a>
          <a href="{{ route('contact') }}" class="{{ $linkBase }} {{ request()->routeIs('contact') ? $active : $hover }}">Contact</a>
        </div>
        <!-- Mobile menu button -->
        <button id="menuToggle" class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-gray-300 hover:text-white hover:bg-gray-800" aria-controls="mobileMenu" aria-expanded="false">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
      </div>
    </nav>

    <!-- Mobile nav panel -->
    <div id="mobileMenu" class="md:hidden fixed top-16 inset-x-0 z-40 border-b border-gray-800 bg-gray-900/95 backdrop-blur hidden">
      <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col gap-2">
        @php
          $linkBase = 'block px-3 py-2 rounded-md text-sm font-medium transition-colors';
          $hover = 'hover:bg-gray-800 hover:text-white text-gray-300';
          $active = 'bg-indigo-600 text-white shadow';
        @endphp
        <a href="{{ route('home') }}" class="{{ $linkBase }} {{ request()->routeIs('home') ? $active : $hover }}">Home</a>
        <a href="{{ route('about') }}" class="{{ $linkBase }} {{ request()->routeIs('about') ? $active : $hover }}">About</a>
        <a href="{{ route('projects') }}" class="{{ $linkBase }} {{ request()->routeIs('projects') ? $active : $hover }}">Projects</a>
        <a href="{{ route('contact') }}" class="{{ $linkBase }} {{ request()->routeIs('contact') ? $active : $hover }}">Contact</a>
      </div>
    </div>

    <main class="pt-20">
      @if (session('status'))
        <div class="max-w-3xl mx-auto px-4">
          <div class="rounded-md bg-green-600/10 border border-green-600 text-green-300 px-4 py-3 mb-6">
            {{ session('status') }}
          </div>
        </div>
      @endif
      {{ $slot ?? '' }}
      @yield('content')
    </main>

    <footer class="border-t border-gray-800 mt-16 py-8 text-center text-sm text-gray-400">
      <div class="max-w-7xl mx-auto px-4">© {{ date('Y') }} FS08 — Built with Laravel + Tailwind</div>
    </footer>
  </body>
  </html>
