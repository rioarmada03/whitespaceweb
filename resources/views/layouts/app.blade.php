<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website') - My Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    @yield('styles')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- <a class="navbar-brand" href="{{ route('home') }}">My Website</a> -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Back</a>
                    </li>
                    
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>
                </form> -->
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>
    

    <footer class="bg-light text-center py-3 mt-4">
        <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')

    
    <div class="container-footer">
        <p>© 2024 Whitespace | Powered by Sponsors</p>
    </div>
    
    
</body>
</html>
