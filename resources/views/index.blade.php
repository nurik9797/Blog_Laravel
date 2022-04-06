@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto py-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    What u like?
                </h1>
                <a href="/blog" 
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
                </a>
            </div>
        </div>    
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://images.unsplash.com/photo-1562669765-28efdc617c80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" width="600" alt="#">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Info Time
            </h2>

            <span class="text-gray-500">By
                <span class="font-bold italic text-gray-800">
                    By Nurik

                </span>, 1 day ago
            </span>
            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.

            </p>
            <p class="font-extrabold text-gray-600 text-l pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique enim incidunt hic, dolor quidem libero itaque consequuntur magni sed nam facere sunt minus quas sit facilis iusto natus veniam blanditiis!

            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">More Info</a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            U can get information about

        </h2>

        <span class="font-extrabold block text-4xl py-1">
            World situation
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Ukraine 
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Russia
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Putin
        </span>
    </div>
@endsection