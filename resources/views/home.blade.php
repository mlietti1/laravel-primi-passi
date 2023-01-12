<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Hello Laravel</title>
</head>
<body>

    <div class="container">
        <h1>{{$welcome}}</h1>

        <ul>
            @foreach ($links as $link)
                <li>{{$link}}</li>
            @endforeach

        </ul>


        <a href="/about">More about us</a>
    </div>
</body>
</html>
