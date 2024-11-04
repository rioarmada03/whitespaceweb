<!-- resources/views/comments/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Link to your CSS file -->
    <style>
     
    </style>
</head>
<body class="body"> <!-- Add 'body' class for background color -->
<div class="container" style="background-color:#043873">
    <div class="container" style="padding-top:12px;">
        <section class="rating" id="rating" style="margin-top:12px">
            <div class="row">
                <div class="col-md-6">
                    <!-- Display Average Rating -->
                    <h1 style="color:black">{{ $title }}</h1>
                    <p>Average Rating: {{ $average }}</p>

                    <!-- Comment Form -->
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating:</label>
                            <input type="number" min="1" max="5" name="rating" id="rating" required />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <!-- Comments Container -->
                    <div class="comments-container">
                        <h2>Comments</h2>
                        <div class="comments-grid">
                            @forelse ($comments as $comment)
                            <div class="comment-item">
                                <strong>{{ $comment->username }}</strong>
                                <p>Rating: {{ $comment->rating }}</p>
                                <p>{{ $comment->description }}</p>
                                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                <a href="{{ route('comments.edit', $comment) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                            @empty
                            <div class="comment-item">
                                <p>No comments yet.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="footer"><br></div>
    </div>
</div>

</div>
</body>
</html>
