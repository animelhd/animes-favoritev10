<?php

namespace Animelhd\AnimesFavorite\Events;

use Illuminate\Database\Eloquent\Model;

class Event
{
    public Model $favorite;

    public function __construct(Model $favorite)
    {
        $this->favorite = $favorite;
    }
}
