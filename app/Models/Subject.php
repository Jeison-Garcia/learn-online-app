<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug', 'imagen', 'area_id'];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function assignments(){
        return $this->hasMany('App\Models\Assignment');
    }
}
