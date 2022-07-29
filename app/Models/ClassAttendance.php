<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassAttendance extends Model
{
    use HasFactory;
    protected $fillable = ["student_id","attendance_id","value"];
    protected $appends = ["student"];

    public function users(){
        return $this->hasOne(student::class,'id','student_id');
    }

    public function getStudentAttribute(){
        return $this->users()->first();
    }
}
