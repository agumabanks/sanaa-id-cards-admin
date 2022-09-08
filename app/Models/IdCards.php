<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class IdCards extends Model
{
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'regNo',
        'dob','course','tel','nationality',
        'studentId'
    ];

    protected $appends = [
        'photo_path',
    ];
}
