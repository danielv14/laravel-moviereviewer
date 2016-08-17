<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
      'title',
      'body',
      'trailer',
      'rating',
      'movieTitle',
      'imdbLink',
      'rottenLink'
    ];

    /**
    * Scope a query to fetch latest and paginate it.
    *
    */
    public function scopeLatestPaginated($query, $pagination)
    {
      return $query->orderBy('created_at', 'desc')->simplePaginate($pagination);
    }
}
