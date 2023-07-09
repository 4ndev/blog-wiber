@extends('layouts.landing')
@section('title', 'Wibe')

@section('content-posts')
    <h1 class="text-center mb-4 text-4xl font-extrabold tracking-tight leading-none pt-8 text-gray-900 md:text-5xl lg:text-6xl">Blog</h1>
    <p class="text-center mb-8 text-lg font-medium text-gray-500 lg:text-xl sm:px-16 lg:px-48">We are different. We are W<span class="text-green-500">i</span>ber</p>
	<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-8" id="view-card">
            @forelse ($posts as $post)
            <div class="col-span-1">
                <div class="max-w-sm h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{route('posts.show', $post->id)}}">
                        <img 
                            class="rounded-t-lg" 
                            src="https://astro-theme-creek.netlify.app/images/introducing-astro.jpg" 
                            alt=""
                            style="view-transition-name: post-{{ $post->id }}" 
                        />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title}}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{  Str::limit($post->body, 115) }}</p>
                        <a href="{{route('posts.show', $post->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Leer más
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
             <p class="col-span-3 text-center">No hay ningún post. Inicia sesión o registrate para crear uno.</p>
            @endforelse
    </section>
@endsection