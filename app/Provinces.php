<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function provinces()
    {
        return $this->hasMany('App\Regencies');
    }
    protected $fillable = [
        'id', 'name',
    ];

}
