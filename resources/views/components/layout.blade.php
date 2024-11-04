<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My Website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <!-- <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul> -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>


</body>
</html>
