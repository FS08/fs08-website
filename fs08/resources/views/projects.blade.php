@extends('layouts.app')

@section('content')
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-8">
      <h1 class="text-3xl font-bold text-white">Projects</h1>
      <p class="text-gray-400 mt-2">A selection of things I build and ship.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <article class="group relative card hover:bg-gray-900 transition-colors overflow-hidden">
        <a href="https://github.com/FS08/CyberToolsHub" target="_blank" class="block">
          <div class="relative">
            <div class="aspect-video bg-gradient-to-br from-indigo-600/20 to-fuchsia-600/20 border-b border-gray-800 flex items-center justify-center rounded-2xl overflow-hidden">
              <div class="flex flex-col items-center text-indigo-200 font-semibold">
                <img src="{{ asset('cth_logo.png') }}" alt="CyberToolsHub" class="h-24 w-24 object-contain rounded-2xl">
                <span class="mt-3">CyberToolsHub</span>
              </div>
            </div>
            <div class="absolute inset-0 border-b border-gray-800 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
              <div class="absolute inset-0 p-4 flex flex-col justify-end gap-2">
                <div class="bg-gray-900/85 backdrop-blur rounded-lg ring-1 ring-white/10 p-4">
                  <p class="text-gray-100 text-sm leading-relaxed">
                    Evidence‑first toolkit for email and URL investigations. Quickly check SPF/DMARC/DNS, submit URLs to sandboxes, and track history.
                  </p>
                  <ul class="mt-2 text-gray-200 text-xs flex flex-wrap gap-2">
                    <li class="px-2 py-1 rounded-md bg-gray-800/80 border border-gray-700">Laravel</li>
                    <li class="px-2 py-1 rounded-md bg-gray-800/80 border border-gray-700">Tailwind</li>
                    <li class="px-2 py-1 rounded-md bg-gray-800/80 border border-gray-700">Vite</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="p-5">
            <h3 class="text-white font-semibold group-hover:text-indigo-300 flex items-center gap-2">
              <img src="{{ asset('cth_logo.png') }}" alt="CyberToolsHub" class="h-8 w-8 object-contain rounded">
              <span>CyberToolsHub</span>
            </h3>
            <p class="text-gray-400 text-sm mt-2">Modern Laravel toolkit for cyber investigations with URL scanning, DNS/SPF/DMARC checks, stats, and history.</p>
            <div class="mt-3 text-sm text-indigo-400">View on GitHub →</div>
          </div>
        </a>
      </article>

      <!-- Add more project cards here as you grow -->
    </div>
  </div>
@endsection
