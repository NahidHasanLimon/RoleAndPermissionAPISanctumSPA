<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara Vue</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <h1>Vue Master Blade File</h1>
    </div>
    <h1 class="text-xl font-bold underline">
        Hello world By Tailwind from app.blade!
  </h1>
    <div id="example">
        {{-- <router-view></router-view> --}}
    </div>
    @yield('content')
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>