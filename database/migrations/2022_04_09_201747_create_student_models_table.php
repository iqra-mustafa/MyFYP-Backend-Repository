<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_models', function (Blueprint $table) {
           
            $table->string('S_Name');
            $table->string('S_Gender')->unique();
            $table->string('S_DOB');
            $table->string("V_ContactNumber")->nullable();
            $table->string("V_CNIC")->nullable();         
            $table->string("V_PresentAddress")->nullable();
           // $table->string("V_ReEnterPassword");
            $table->string("V_UniversityName")->nullable();
            $table->string("V_Degree")->nullable();
            $table->string("V_Semester")->nullable();
            $table->string("V_TeamName")->nullable();
            $table->string("V_Day")->nullable();
            $table->string("V_InstituteName")->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_models');
    }
}
