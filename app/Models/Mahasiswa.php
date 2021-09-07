<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'tim',
        'name',
        'wa',
        'email',
        'class',
        'kategori',
        'ktm',
        'photo',

    ];
    protected $hidden = [

    ];
    public function category(){
        return $this->belongsTo( Category::class, 'categories_id', 'id');
    }
}
