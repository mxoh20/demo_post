<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-200">
<nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">

        <li class="p-3"><a href="{{route('home')}}">Home</a></li>
        <li class="p-3"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="p-3"><a href="{{route('posts')}}">Post</a></li>
        <li class="p-3"><a href="#"></a></li>

    </ul>

    <ul class="flex items-center">

        @auth
            <li class="p-3"><a href="#">{{auth()->user()->name}}</a></li>
            <li class="p-3">

                <form action="{{route('logout')}}" method="post" class="inline">
                    @csrf
                    <button type="submit">logout</button>
                </form>

            </li>
        @endauth


            @guest()
            <li class="p-3"><a href="{{route('login')}}">Login</a> </li>
            <li class="p-3"><a href="{{route('registration')}}">Register</a></li>
            @endguest



    </ul>
</nav>
@yield('content')

</body>
</html>
