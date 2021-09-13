@extends('layout.app')

@section("content")
    <div class="flex justify-center">

        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1">{{$user->name}}</h1>

                <p>Posted {{$posts->count()}} {{Str::plural('post',$posts->count())}} </p>
            </div>


        <div class="bg-white p-6 rounded-lg">


            @foreach($posts as $post)
             <div>{{$post->body}}</div>
            @endforeach
        </div>
    </div></div>
@endsection
