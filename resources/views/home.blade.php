<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1 class="text-uppercase text-center">homepage</h1>
    <div class="container">
        <h2>Film</h2>
        <div class="row g-5">
            @foreach ($movies as $movie)
            <div class="card col-4">
                <div class="card-header">
                    <h3>{{$movie->title}}</h3>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$movie->original_title}}</li>
                  <li class="list-group-item">{{$movie->nationality}}</li>
                  <li class="list-group-item">{{$movie->date}}</li>
                  <li class="list-group-item">{{$movie->vote}}</li>
                </ul>
              </div>
            @endforeach
        </div>
</body>
</html>
