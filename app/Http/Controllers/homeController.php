<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class HomeController extends Controller
{
    public function home() {
        // Calculate the average Comment
        $average = Comment::avg('rating');
        
        // Get all comments
        $comments = Comment::all();

        // Pass variables to the view
        return view('home', compact('average', 'comments'));
    }
    public function index() {
        // Calculate the average Comment
        $average = Comment::avg('rating');
        
        // Get all comments
        $comments = Comment::all();

        // Pass variables to the view
        return view('home', compact('average', 'comments'));
    }
}
