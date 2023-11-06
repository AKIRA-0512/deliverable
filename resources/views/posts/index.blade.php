<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='zoos'>
            @foreach ($zoos as $zoo)
                <div class='zoo'>
                    <h2 class='name'>{{ $zoo->name }}</h2>
                    <p class='orverview'>{{ $zoo->orverview}}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $zoos->links() }}
        </div>
    </body>
</html>