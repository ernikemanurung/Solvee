<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regencies extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'province_id', 'name',
    ];

}
