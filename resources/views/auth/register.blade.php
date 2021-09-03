@extends('layout.app')


@section("content")

    <div class="flex justify-center">
        <div class="w-5/12 bg-white p-6 rounded-lg">
            Register

            <form action="{{route('submit_registration')}}" method="post">

                @csrf

                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-600 @enderror" value="{{old('name')}}">
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-600 @enderror" value="{{old('username')}}">
                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">Email</label>
                    <input type="email" name="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-600 @enderror" value="{{old('email')}}">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-600 @enderror">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg ">
                    @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="submit" class="bg-blue-500 px-4 py-3  rounded font-medium w-full" value="sign up">
                </div>

            </form>

        </div>
    </div>

@endsection
