<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsTo('App\Models\Tag','tag_id');
    }
    public function images()
    {
        return $this->belongsTo('App\Models\Image','image_id');
    }
}
