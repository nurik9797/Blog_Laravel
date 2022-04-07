@extends('layouts.app')

@section('content')
<div class="w-3/5 m-auto text-center italic font-serif">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            New Page
        </h1>
    </div>

</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" width="500" height="700" alt="#">
    </div>
    <div>
        <h2 class="text-gray-700 font bold text-5xl pb-4">
            Let's get information about..
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">By Nurik</span>, 1day ago
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Не она гор языком грустный? Жаренные имеет что продолжил гор.
        </p>
        <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Keep Reading</a>
    </div>
</div>

@endsection
