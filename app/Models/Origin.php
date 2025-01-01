<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'index',
        'name',
        'description',
        'health',
        'food'
    ];

    public $timestamps = false;

    public function powers() {
        return $this->hasMany(Power::class, 'origin_type', 'index');
    }
}
