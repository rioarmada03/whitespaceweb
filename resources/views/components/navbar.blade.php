<header>
    <div class="navbar">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="Whitespace logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#extension">Extension</a></li>
                <li><a href="#pricing">Pricing</a></li>
            </ul>
        </nav>
        @guest
            <div class="auth-buttons">
                <a href="/login" class="btn btn-login">Login</a>
                <a href="/register" class="btn btn-signup">Sign Up</a>
            </div>
            @else 
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
             </form>
            <div class="auth-buttons">
                <a href="#" class="btn btn-name">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-signup">
                        {{ __('Logout') }}
                                    </a>
            </div>
            @endguest
    </div>
</header>
