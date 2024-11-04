<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Comment</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .rating {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 600px; /* Reduced max-width for better mobile view */
        }

        .rating h1 {
            color: #043873; /* Dark Blue */
            text-align: center;
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        .rating .form-group {
            margin-bottom: 15px;
        }

        .rating .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333; /* Darker gray */
        }

        .rating .form-group input,
        .rating .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box; /* Ensures padding is included in width */
        }

        .rating .form-group input[type="number"] {
            -moz-appearance: textfield; /* Firefox */
            appearance: textfield;
        }

        .rating .form-group input[type="number"]::-webkit-inner-spin-button,
        .rating .form-group input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none; /* Chrome, Safari, and Opera */
            margin: 0;
        }

        /* General Button Styling */
        .rating button.btn,
        .rating a.btn-primary {
            background-color: #4F9CF9; /* Blue */
            color: #fff; /* White */
            border: 2px solid #4F9CF9; /* Blue border */
            padding: 12px 24px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            text-align: center;
            line-height: 1.5;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
        }

        .rating button.btn:hover,
        .rating a.btn-primary:hover {
            background-color: #ffffff; /* White on hover */
            color: #043873; /* Dark Blue text on hover */
            transform: scale(1.05); /* Slight scale effect on hover */
        }

        .rating button.btn:focus,
        .rating a.btn-primary:focus {
            outline: none; /* Remove default focus outline */
        }

        .rating input[type="number"] {
            border: 2px solid #4CAF50; /* Green border */
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .rating {
                padding: 15px;
            }

            .rating h1 {
                font-size: 1.5em;
            }

            .rating button.btn,
            .rating a.btn-primary {
                padding: 10px 20px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .rating {
                padding: 10px;
                max-width: 100%; /* Full width on very small screens */
            }

            .rating h1 {
                font-size: 1.3em;
            }

            .rating button.btn,
            .rating a.btn-primary {
                padding: 8px 16px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="rating">
        <h1>Edit Comment</h1>
        <form action="{{ route('comments.update', $comment) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ $comment->username }}" required />
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" required>{{ $comment->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" min="1" max="5" name="rating" id="rating" value="{{ $comment->rating }}" required />
            </div>
            <button type="submit" class="btn btn-primary">Update Comment</button>
        </form>
    </div>
</body>
</html>
