<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Rating extends Model
{
    protected $fillable = ['username', 'description', 'rating'];

    public function rateable(): MorphTo
    {
        return $this->morphTo();
    }
}

