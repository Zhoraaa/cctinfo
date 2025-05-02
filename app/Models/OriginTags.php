<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OriginTag extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'index',
        'name'
    ];

    protected $hidden = ['id'];

    public $timestamps = false;
}
