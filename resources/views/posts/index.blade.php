@extends('layout.app')

@section("content")
    <div class="flex justify-center">

        <div class="w-8/12">

            <div class="p-6 ">
                <h1 class=" text-2xl font-medium"></h1>
            </div>

            <div class="bg-white p-6 rounded-lg">

                @auth()

                    <form action="{{route('posts')}}" method="post" class="mb-8">
                        @csrf
                        <div class="mb-4">
                            <label for="body" class="sr-only">body</label>
                            <textarea name="body" id="body" cols="20" rows="8"
                                      class="bg-gray-100 w-full p-4 rounded-lg @error('body') border-red-600 @enderror"
                                      placeholder="Post something"></textarea>
                        </div>

                        @error('body')
                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror

                        <div>
                            <button type="submit" class="bg-blue-500 px-4 py-3  rounded font-medium">post</button>
                        </div>
                    </form>

                @endauth


                @if($posts->count())

                    @foreach($posts as $post)

                        <x-post :post="$post"/>

                    @endforeach

                    <div class="p-4">
                        {{$posts->links()}}
                    </div>

                @else
{{--                    <p>{{$user->name}} does not have any post</p>--}}
                    <p> No post yet </p>
                @endif
            </div>

        </div>
    </div>

@endsection
