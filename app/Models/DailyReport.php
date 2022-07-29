<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    use HasFactory;
    protected $appends = ["school"];
    protected $fillable = ["NoOfPresentStudents","image","Feedback","SchoolName"];
    protected $table = "dailyreports";


    public function school(){
        return $this->hasOne(School::class,'id','SchoolName');
    }

    public function getSchoolAttribute(){
        return $this->school()->first();
    }
}
