@extends('layouts.app')

@section('content')
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-3xl font-bold text-white">Contact</h1>
    <p class="text-gray-400 mt-2">Have a project, idea, or question? Let’s talk.</p>

    <form action="{{ route('contact.send') }}" method="POST" class="mt-8 grid gap-5 card p-6">
      @csrf

      <!-- Honeypot field (hidden from users) -->
      <div class="hidden" aria-hidden="true">
        <label for="website">Website</label>
        <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
      </div>

      <div>
        <label for="name" class="block text-sm font-medium text-gray-300">Your name</label>
        <input id="name" name="name" type="text" value="{{ old('name') }}" required
               class="mt-2 block w-full rounded-md bg-gray-900 border border-gray-700 text-gray-100 placeholder-gray-500 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 px-3 py-2" placeholder="Jane Doe">
        @error('name')
          <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-300">Your email</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}" required
               class="mt-2 block w-full rounded-md bg-gray-900 border border-gray-700 text-gray-100 placeholder-gray-500 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 px-3 py-2" placeholder="you@example.com">
        @error('email')
          <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="message" class="block text-sm font-medium text-gray-300">Message</label>
        <textarea id="message" name="message" rows="6" required
                  class="mt-2 block w-full rounded-md bg-gray-900 border border-gray-700 text-gray-100 placeholder-gray-500 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 px-3 py-2"
                  placeholder="Tell me a bit about what you need...">{{ old('message') }}</textarea>
        @error('message')
          <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex items-center justify-between">
        <p class="text-xs text-gray-500">Your message goes straight to my inbox.</p>
        <button type="submit" class="inline-flex items-center px-5 py-2.5 rounded-md bg-indigo-600 text-white font-semibold hover:bg-indigo-500">Send message</button>
      </div>
    </form>
  </div>
@endsection
