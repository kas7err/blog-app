@extends('layouts.app')

@section('header')
<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{route('home')}}">
            {{ $post->title }}
        </a>
    </div>
</header>
@endsection

@section('content')
<!-- Post Section -->

<section class="w-full md:w-2/3 flex flex-col  px-3">
    <div class="bg-white flex flex-col items-start justify-start px-6">
        <p class="text-base md:text-sm text-blue-800 font-bold">&lt;
            <a href="/" class="text-base md:text-sm text-blue-800 font-bold no-underline hover:underline">
                BACK TO BLOG
            </a>
        </p>
    </div>

    <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
            <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
            <a href="{{route('category', ['category' => \Str::lower($post->category->name)])}}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->category->name }}</a>
            <p href="#" class="text-sm pb-8">
                By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->author_name }}</a>, Published on April 25th, 2020
            </p>
            {!! $post->body !!}
        </div>
    </article>

    <div class="w-full flex pt-6">
        <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
            <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous
            </p>
            <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
        </a>
        <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
            <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i
                    class="fas fa-arrow-right pl-1"></i></p>
            <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
        </a>
    </div>

    <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
        <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
            <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
                class="rounded-full shadow h-32 w-32">
        </div>
        <div class="flex-1 flex flex-col justify-center md:justify-start">
            <p class="font-semibold text-2xl">David</p>
            <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero
                suscipit suscipit eu eu urna.</p>
            <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@include('sidebars.right-sidebar')

@endsection
