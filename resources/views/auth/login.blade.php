@extends('layout.app')


@section("content")

    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-10 rounded-lg">


            @if(session('status'))

                <div class=" bg-red-500 p-4 rounded-lg mb-6 text-center text-white">
                {{ session('status') }}
                </div>

            @endif


            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
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
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>


                <div class="mb-4">
                    <input type="submit" class="bg-blue-500 px-4 py-3  rounded font-medium w-full" value=" sign in">
                </div>

            </form>

        </div>
    </div>

@endsection
