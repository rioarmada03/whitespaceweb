<div class="container" style="background-color:#043873">
    <div class="container">
        <section class="rating" id="rating">
            <div class="row">
                <div class="col-md-6">
                    <!-- Display Average Rating -->
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
                                <a href="{{ route('comments.edit', $comment) }}" class="btn btn-secondary">Edit</a>
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
