<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug',];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function subjects(){
        return $this->hasMany('App\Models\Subject');
    }
}
