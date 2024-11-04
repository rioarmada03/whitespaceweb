@extends('components.layout')

@section('title', 'Home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whitespace</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
</style>
<body>

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- Include Hero Section -->
    @component('components.hero', [
        'title' => 'Get More Done with Whitespace',
        'description' => 'Project management software that enables your teams to collaborate, plan, analyze and manage everyday tasks',
        'buttonLink' => '#learn-more',
        'buttonText' => 'Try Whitepace free',
        'imageSrc' => asset('Home.png')
    ]) @endcomponent

    <!-- Include Features Section -->
    @component('components.features', [
        'title' => 'Project Management',
        'description' => 'Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.',
        'buttonLink' => '#learn-more',
        'imageSrc' => asset('features.png')
    ]) @endcomponent

    <!-- Include Work Together Section -->
    @component('components.worktogether', [
        'title' => 'Work Together',
        'description' => 'With whitepace, share your notes with your colleagues and collaborate on them. You can also publish a note to the internet and share the URL with others.',
        'buttonLink' => '#learn-more',
        'imageSrc' => asset('worktogether.png')
    ]) @endcomponent

    <!-- Include Extension Section -->
    @component('components.extension', [
        'title' => 'Use as Extension',
        'description' => 'Customize the app with plugins, custom themes and multiple text editors (Rich Text or Markdown). Or create your own scripts and plugins using the Extension API.',
        'buttonLink' => '#learn-more',
        'imageSrc' => asset('extension.png')
    ]) @endcomponent

    <!-- Include Customize Section -->
    @component('components.features', [
        'title' => 'Customize it to Your Needs',
        'description' => 'Whether you want to get organized, keep your personal life on track, or boost workplace productivity, Evernote has the right plan for you.',
        'buttonLink' => '#learn-more',
        'imageSrc' => asset('customize.png')
    ]) @endcomponent

    <!-- Include Comments Section -->
    @component('comments.index', [
        'title' => 'Rating',
        'comments' => $comments,
        'average' => $average,
    ]) @endcomponent


    <!-- Include Pricing Section -->
    @component('components.pricing', [
        'plans' => [
            [
                'name' => 'Free',
                'price' => '$0/month',
                'features' => [
                    'Sync unlimited devices',
                    '10 GB monthly uploads',
                    '200 MB max. note size',
                    'Customize Home dashboard and widgets',
                    'Connect primary Google Calender account',
                    'Add due dates, reminders, and notifications to your task'
                ],
                'buttonLink' => '#learn-more'
            ],
            [
                'name' => 'Personal',
                'price' => '$11.99/month',
                'features' => [
                    'Sync unlimited devices',
                    '10 GB monthly uploads',
                    '200 MB max. note size',
                    'Customize Home dashboard and widgets',
                    'Connect primary Google Calender account',
                    'Add due dates, reminders, and notifications to your task'
                ],
                'buttonLink' => '#learn-more'
            ],
            [
                'name' => 'Organization',
                'price' => '$49.99/month',
                'features' => [
                    'Sync unlimited devices',
                    '10 GB monthly uploads',
                    '200 MB max. note size',
                    'Customize Home dashboard and widgets',
                    'Connect primary Google Calender account',
                    'Add due dates, reminders, and notifications to your task'
                ],
                'buttonLink' => '#learn-more'
            ]
        ]
    ]) @endcomponent

    <!-- Include Footer -->
    @include('components.footer')

</body>
</html>
@endsection
