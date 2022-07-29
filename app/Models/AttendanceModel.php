<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceModel extends Model
{
    use HasFactory;
    public $table = "attendance";
    protected $fillable = ["class","time","user_id","school_id"];
    protected $appends = ["user"];


    public function users(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function getUserAttribute(){
        return $this->users()->first();
    }

}
