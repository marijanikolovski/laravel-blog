@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@foreach ( $posts as $post )
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/03/27/20/00/coffee-1284041_960_720.jpg" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            Learn how to write Larave code
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">Code With Marija</span>
        </span>, 1 day ago

        <p class="text-xl text-gray-700 mb-10 pt-8 pb-10 leading-8 font-light" style="  overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, molestias! Veniam doloremque, quaerat ea eius nisi perferendis officia corporis vel consequatur ex quam quibusdam ut unde tempora quae dolorem. Laudantium?
        </p>

        <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Keep Reading
        </a>
    </div>
</div>
@endforeach

@endsection