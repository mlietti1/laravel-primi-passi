<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>About</title>
</head>
<body>
    <div class="container">
        <h1>About</h1>
        <div class="row">
            @forelse ($team as $user)

                <div class="box">
                    <p>{{$user['nome']}}</p>
                    <p>{{$user['cognome']}}</p>
                    <p>{{$user['mail']}}</p>
                </div>

            @empty
                NO USERS AVAILABLE
            @endforelse
        </div>
        <a href="/">Back to home</a>
    </div>
</body>
</html>
