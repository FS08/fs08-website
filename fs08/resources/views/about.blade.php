@extends('layouts.app')

@section('content')
  <section class="relative overflow-hidden">
    <div aria-hidden="true" class="pointer-events-none absolute -top-40 right-0 left-1/2 -z-10 opacity-30">
      <div class="mx-auto max-w-7xl px-4">
        <div class="aspect-[3/1] bg-gradient-to-tr from-indigo-600 via-fuchsia-500 to-cyan-400 blur-3xl rounded-full"></div>
      </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-20">
      <div class="grid lg:grid-cols-3 gap-12 items-start">
        <div class="lg:col-span-1">
          <img
            src="{{ asset('founder.jpg') }}"
            alt="Photo of Fabio Santos (fs08)"
            class="w-56 h-56 rounded-md object-cover ring-2 ring-gray-800 shadow-xl" />
        </div>
        <div class="lg:col-span-2">
          <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white">My <span class="text-accent">Journey</span></h1>
          <p class="mt-6 text-gray-300 leading-8 text-justify">
            I’m <span class="text-accent font-semibold">Fábio Santos</span>, an IT student passionate about cybersecurity and programming. I’m 25, originally from Portugal,
            and I’ve been living in Switzerland since 2017. I hold a Swiss CFC as a car mechanic and I’m now in the final (4th)
            year of my second Swiss CFC in IT.
          </p>
          <div class="mt-6 grid sm:grid-cols-2 gap-6 text-sm">
            <div class="card p-5">
              <div class="text-white">Timeline</div>
              <ul class="mt-2 text-gray-400 space-y-2 list-disc list-inside">
                <li>2017 — Moved to Switzerland</li>
                <li>2019 — Earned Swiss CFC (car mechanic)</li>
                <li>2021 — Started second Swiss CFC (IT)</li>
                <li>2025 — Final year: focusing on security + web</li>
              </ul>
            </div>
            <div class="card p-5">
              <div class="text-white">Now</div>
              <ul class="mt-2 text-gray-400 space-y-2 list-disc list-inside">
                <li>Building with <span class="token">Laravel</span> + <span class="token">Tailwind</span></li>
                <li>Studying security fundamentals and best practices</li>
                <li>Automating small tasks to learn faster</li>
              </ul>
            </div>
          </div>

          <div class="mt-8 grid sm:grid-cols-2 gap-6 text-sm">
            <div class="card p-5">
              <div class="text-white">Skills & Tools</div>
              <ul class="mt-2 text-gray-400 list-disc list-inside space-y-1">
                <li>Laravel, PHP, Tailwind, Vite</li>
                <li>Git, Linux, basic networking</li>
                <li>Security basics: auth, input validation, headers</li>
              </ul>
            </div>
            <div class="card p-5">
              <div class="text-white">What I value</div>
              <ul class="mt-2 text-gray-400 list-disc list-inside space-y-1">
                <li>Clarity over complexity</li>
                <li>Useful automation and fast feedback</li>
                <li>Respect for user privacy</li>
              </ul>
            </div>
          </div>

          <div class="mt-8 card p-5">
            <div class="text-white">Beyond tech</div>
            <p class="mt-2 text-gray-300 text-justify leading-7">I enjoy learning, tinkering, and building things that make life a little easier.
              Switching careers taught me persistence and curiosity — qualities I bring to every project.</p>
          </div>

          <div class="mt-10 flex gap-3">
            <a href="{{ route('projects') }}" class="inline-flex items-center px-5 py-3 rounded-md bg-indigo-600 text-white font-semibold hover:bg-indigo-500">See my projects</a>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-5 py-3 rounded-md bg-gray-800 text-gray-200 hover:bg-gray-700">Get in touch</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
