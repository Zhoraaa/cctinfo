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
        'adulting',
        'evolution',
    ];

    protected $hidden = ['id'];

    public $timestamps = false;

    public function powers()
    {
        return $this->hasMany(Power::class, 'origin_type', 'index');
    }
    public function evolutions()
    {
        return $this->hasMany(Origin::class, 'parent', 'index');
    }

    public function getFullDataAttribute()
    {
        return $this->loadMissing([
            'powers',
            'evolutions.powers'
        ]);
    }
}
