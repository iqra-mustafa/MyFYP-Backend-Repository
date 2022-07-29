<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSchedule extends Model
{
    use HasFactory;
    protected $fillable = ["school_id","date","time","subject"];
}
