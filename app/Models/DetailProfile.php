<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProfile extends Model
{
    use HasFactory;

    protected $table = "detail_profile";

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_birth',
        'resume',
        'profile',
        'background'
    ];
}
