<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'origin_type',
        'name',
        'description',
        'explain'
    ];

    protected $hidden = ['id', 'origin_type'];

    public $timestamps = false;
}
