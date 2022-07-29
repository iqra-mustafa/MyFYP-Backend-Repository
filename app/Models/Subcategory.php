<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $primarykey = 'subcategory_id';

    function getCategory(){
       return $this->hasMany(Category::class,'category_id');
    }
}
