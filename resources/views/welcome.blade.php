<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <div class="sidebar">
            <h1>@yield('title')</h1>
        </div>
        <main>
            @section('main')
            @stop
        </main>


    </body>
</html>
