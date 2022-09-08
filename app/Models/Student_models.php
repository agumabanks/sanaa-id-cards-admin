<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student_models extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','fee_clarence',
         'email', 'regNo',
        'dob','course','tel','nationality',
        'studentId','photo_path'
    ];
    public function image_url(){
        return Storage::url($this->photo_path);
    }
}
