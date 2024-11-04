<section class="hero">
    <div class="container hero-content">
        
        <div class="hero-text">
            <h1>{{ $title }}</h1>
            <p>{{ $description }}</p>
            @guest
            <a href="/login" class="btn-primary">{{ $buttonText }} <i class="fa-regular fa-arrow-right"></i></a>
            @else
            <a href="/tasks" class="btn-primary">{{ $buttonText }} <i class="fa-regular fa-arrow-right"></i></a>
            
            @endguest
        </div>
        <div class="hero-image">
            <img src="{{ $imageSrc }}" alt="Whitespace Home">
        </div>
    </div>
</section>
