<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMDB</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="#">
                        <img src="{{asset('/images/yawn.png')}}" alt="logo">
                    </a>     
                </li>
                <li class="ml-16" >
                    <a class="hover:text-gray-300" href="">
                        Movies
                    </a>
                </li>
                <li class="ml-7" >
                    <a class="hover:text-gray-300" href="">
                        TV Shows
                    </a>
                </li>
                <li class="ml-7" >
                    <a class="hover:text-gray-300" href="">
                        Actors
                    </a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-5 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="search">
                </div>

            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>