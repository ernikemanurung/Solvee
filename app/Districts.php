<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'regency_id', 'name',
    ];

}
