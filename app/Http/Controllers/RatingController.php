<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        // $request->validate([
        //     'rating' => 'required|integer|min:1|max:5',
        // ]);

        $rating = Rating::create([
            'username' => $request->username,
            'description' => $request->description,
            'rating' => $request->rating,
        ]);


        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }

}
