<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Route::has('login'))
                @auth
                    <x-app-layout>
                    </x-app-layout> 
                    hello               
                @else
                    <a href="{{route('login')}}">
                        <span>
                        Login
                        </span>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                    <a  href="{{route('register')}}">
                        <span>
                            Register
                        </span>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                @endauth
            @endif
</body>
</html>