<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'driver_id', 'amount', 'next_due_date', 
    ];
}
