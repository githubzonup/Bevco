<?php

namespace App\Models;

class State extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state_name', 'state_code',
    ];
}
