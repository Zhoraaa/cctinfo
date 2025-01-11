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
        'food',
        'average',
        'kindness',
        'evoltion',
    ];

    public $timestamps = false;

    public function powers() {
        return $this->hasMany(Power::class, 'origin_type', 'index');
    }
    public function evolutions() {
        return $this->hasMany(Origin::class, 'evolution', 'index');
    }
}
