@extends('layouts.app')

@section('content')
  <section class="relative overflow-hidden">
    <div aria-hidden="true" class="pointer-events-none absolute -top-40 right-0 left-1/2 -z-10 opacity-30">
      <div class="mx-auto max-w-7xl px-4">
        <div class="aspect-[3/1] bg-gradient-to-tr from-indigo-600 via-fuchsia-500 to-cyan-400 blur-3xl rounded-full"></div>
      </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <div class="inline-flex items-center gap-2 rounded-full border border-indigo-500/40 bg-indigo-500/10 px-3 py-1 text-indigo-300 text-xs mb-4">Always learning • Building in public</div>
          <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-white">
            Build. Learn. Secure.
          </h1>
          <p class="mt-4 text-gray-300 leading-7">
            I’m Fábio Santos (fs08) — an IT student focused on cybersecurity and programming. I love shipping small, useful projects and sharing the journey.
          </p>
          <div class="mt-6 grid grid-cols-2 gap-4 text-sm">
            <div class="card p-4">
              <div class="text-gray-400">Now building</div>
              <div class="mt-1 text-white">CyberToolsHub</div>
            </div>
            <div class="card p-4">
              <div class="text-gray-400">Learning</div>
              <div class="mt-1 text-white">Laravel, Tailwind, Security</div>
            </div>
            <div class="card p-4">
              <div class="text-gray-400">Based</div>
              <div class="mt-1 text-white">Switzerland (from Portugal)</div>
            </div>
            <div class="card p-4">
              <div class="text-gray-400">Status</div>
              <div class="mt-1 text-white">CFC IT — final year</div>
            </div>
          </div>
          <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('projects') }}" class="inline-flex items-center px-5 py-3 rounded-md bg-indigo-600 text-white font-semibold hover:bg-indigo-500">View Projects</a>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-5 py-3 rounded-md bg-gray-800 text-gray-200 hover:bg-gray-700">Contact Me</a>
          </div>
          <div class="mt-6 flex flex-wrap gap-2 text-xs text-gray-300">
            <span class="px-2 py-1 rounded-md bg-gray-800/80 border border-gray-700">Laravel</span>
            <span class="px-2 py-1 rounded-md bg-gray-800/80 border border-gray-700">Tailwind</span>
            <span class="px-2 py-1 rounded-md bg-gray-800/80 border border-gray-700">Security</span>
            <span class="px-2 py-1 rounded-md bg-gray-800/80 border border-gray-700">Automation</span>
          </div>
        </div>
        <div class="relative">
          <a href="{{ route('projects') }}" class="block card-strong overflow-hidden shadow-xl">
            <div class="relative">
              <div class="relative aspect-[16/10] bg-gradient-to-br from-indigo-600/20 to-fuchsia-600/20 flex items-center justify-center rounded-3xl">
                <div class="flex flex-col items-center text-indigo-100">
                  <img src="{{ asset('cth_logo.png') }}" alt="CyberToolsHub" class="h-32 w-32 object-contain rounded-2xl">
                  <span class="mt-3 text-xl font-semibold">CyberToolsHub</span>
                  <span class="mt-1 text-sm text-indigo-100/80">Secure phishing email scanner</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <h2 class="text-white font-semibold mb-5">Highlights</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="card p-6">
        <h4 class="text-white font-semibold">Laravel + Tailwind</h4>
        <p class="text-gray-400 mt-2 text-sm">Clean stacks, fast iteration, production-ready foundations.</p>
      </div>
      <div class="card p-6">
        <h4 class="text-white font-semibold">Cybersecurity</h4>
        <p class="text-gray-400 mt-2 text-sm">Learning threat modeling, hardening, and practical defense‑in‑depth.</p>
      </div>
      <div class="card p-6">
        <h4 class="text-white font-semibold">DX & Automation</h4>
        <p class="text-gray-400 mt-2 text-sm">Better tooling for faster, safer delivery.</p>
      </div>
    </div>
  </section>
@endsection
