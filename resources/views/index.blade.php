@extends('layouts.app')

@section('nav')
<nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a href="#" class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
            @click="open = !open">
            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div
            class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="{{route('category', ['category' => 'technology'])}}"
                class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Technology</a>
            <a href="{{route('category', ['category' => 'automotive'])}}"
                class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Automotive</a>
            <a href="{{route('category', ['category' => 'finance'])}}"
                class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Finance</a>
            <a href="{{route('category', ['category' => 'politics'])}}"
                class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Politics</a>
            <a href="{{route('category', ['category' => 'culture'])}}"
                class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Culture</a>
            <a href="{{route('category', ['category' => 'sports'])}}"
                class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Sports</a>
        </div>
    </div>
</nav>
@endsection

@section('header')
<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{route('home')}}">
            Blog
        </a>
        <p class="text-lg text-gray-600">Welcome!</p>
    </div>
</header>
@endsection

@section('content')
<!-- Posts Section -->
<section class="w-full md:w-2/3 flex flex-col px-3">
@foreach ($posts as $post)
<article class="flex flex-col shadow my-4">
    <a href="{{route('post-title', ['slug' => $post->slug])}}" class="hover:opacity-75">
        <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <a href="{{route('category', ['category' =>\Str::lower($post->category->name)])}}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->name}}</a>
        <a href="{{route('post-title', ['slug' => $post->slug])}}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">{{$post->author_name}}</a>, Published on April
            25th, 2020
        </p>
        <div>{!! Str::substr($post->body, 0, 455) !!} ...</div><br>
        <a href="{{route('post-title', ['slug' => $post->slug])}}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                class="fas fa-arrow-right"></i></a>
    </div>
</article>
@endforeach

<!-- Pagination -->
<div class="flex items-center py-8">
    {{ $posts->links('pagination::tailwind') }}
</div>
</section>


@include('sidebars.right-sidebar')
@endsection
