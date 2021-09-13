@extends('layout.app')

@section("content")
    <div class="flex justify-center">

        <div class="w-8/12">


            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1">{{$user->name}}</h1>

                <p>Posted {{$posts->count()}} {{Str::plural('post',$posts->count())}}</p>

            </div>


            <div class="bg-white p-6 rounded-lg">
{{--                    <div>{{$post->body}}</div>--}}
                    @if($posts->count())

                        @foreach($posts as $post)

                            <x-post :post="$post"/>

                        @endforeach

                        <div class="p-4">
                            {{$posts->links()}}
                        </div>

                    @else
                        <p>{{$user->name}} does not have any post</p>
                    @endif

            </div>



        </div>
    </div>
@endsection
