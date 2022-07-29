<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = ["name","location","timing","image"];


    public function getImageAttribute($val){
        return public_path()."/schoolimages/".$val;
    }
}
