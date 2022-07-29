<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyRequests extends Model
{
    use HasFactory;
    protected  $fillable = ["request_type","user_id","title","description","status"];
    protected $appends = ["user"];

    public function users()
    {
        return $this->hasOne(User::class,'id',"user_id");
    }
    public function getUserAttribute(){
        return $this->users()->first();
    }
}
