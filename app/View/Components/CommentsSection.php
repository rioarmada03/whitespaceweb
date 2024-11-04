<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CommentsSection extends Component
{
    public $title;
    public $comments;
    public $average;

    public function __construct($title, $comments, $average)
    {
        $this->title = $title;
        $this->comments = $comments;
        $this->average = $average;
    }

    public function render()
    {
        return view('components.comments-section');
    }
}
