<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug',];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function profile(){
        return $this->hasMany('App\Models\Profile');
    }
}
