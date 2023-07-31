<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    //one item has one category
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
