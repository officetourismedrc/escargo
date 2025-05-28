<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Articles;

class ActuCatego extends Model
{
    //

    public function articles()
    {
        return $this->belongsToMany(Articles::class, 'art_catego_pivots');
    }

}
