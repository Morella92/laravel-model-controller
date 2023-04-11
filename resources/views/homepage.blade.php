<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model and Controllers</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <div class="container">

        <div class="row">

            <h1 class="text-center fs-1 col-12">
                The Best Movies
            </h1>

            <ul class="col mt-3 row gap-3">

                @foreach ($movies as $movie)

                    <div class="card col-5">
                        <div class="card-body">
                            <h4 class="card-title"> {{ $movie->title }} </h4>
                            <h5 class="card-subtitle mb-2"> {{ $movie->original_title }} </h5>
                            <p class="card-nation mt-auto"> {{ $movie->nationality }} </p>
                            <div class="info-wrapper">
                                <span class="card-date" {{ $movie->date }} </span> 
                                <span class="card-vote"> {{ $movie->vote }} </span>
                            </div>
                        </div>
                    </div>

                @endforeach

            </ul>

        </div>
        
    </div>
</body>
</html>