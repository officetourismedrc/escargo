<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\ActuCatego;

class Articles extends Model
{
    //

    public function categories()
    {
        return $this->belongsToMany(ActuCatego::class, 'art_catego_pivots');
    }
}
