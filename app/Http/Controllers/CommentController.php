<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        $average = Comment::avg('rating');
        return view('comments.index', compact('comments', 'average'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'description' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Comment::create($request->all());
        return redirect()->route('home');
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'username' => 'required|string',
            'description' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $comment->update($request->all());
        return redirect()->route('home')->with('success', 'Comment updated successfully!');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('home')->with('success', 'Comment deleted successfully!');
    }
}
