<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//To use tokens for users
use Laravel\Sanctum\HasApiTokens;

use Laratrust\Traits\LaratrustUserTrait;


class User extends Authenticatable
{
    protected $primaryKey = 'id';
    
    public $timestamps = false;
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'V_ContactNumber',
        'V_CNIC' ,
        'V_PresentAddress',
        'password',
        'V_UniversityName' ,
        'V_Degree' ,
        'V_Semester' ,
        'V_TeamName' ,
        'V_Day' ,
        'V_InstituteName',    
        'V_Designation',
        'is_principal', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'api_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
