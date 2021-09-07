<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $fillable = [
        'tim',
        'name',
        'wa',
        'email',
        'class',
        'ktm',
        'photo',

    ];
    protected $hidden = [

    ];
    protected $table = 'designs';
}
