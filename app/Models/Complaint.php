<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = ["title","description","image","user_id","school_id"];
    protected $appends =["user","school"];


    public function users(){
        return $this->hasOne(User::class,"id","user_id");
    }
    public function schools(){
        return $this->hasOne(School::class,"id","school_id");
    }

    public function getUserAttribute(){
        return $this->users()->first();
    }
    public function getSchoolAttribute(){
        return $this->schools()->first();
    }

}
