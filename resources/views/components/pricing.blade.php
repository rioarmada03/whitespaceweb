<section class="pricing" id="pricing">
    <div class="container">
        <h2 class="container pricing-text">Choose Your Plan</h2>
        <p class="text">Whether you want to get organized, keep your personal life on track, or boost workplace productivity, Evernote has the right plan for you</p>
        <div class="plans">
            @foreach($plans as $plan)
                <div class="plan">
                    <h3>{{ $plan['name'] }}</h3>
                    <p class="dollar">{{ $plan['price'] }}</p>
                    <ul>
                        @foreach($plan['features'] as $feature)
                            <p><i class="fas fa-check icon"></i> {{ $feature }}</p>
                        @endforeach
                    </ul>
                    <a href="{{ $plan['buttonLink'] }}" class="btn-primary">Get Started</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
