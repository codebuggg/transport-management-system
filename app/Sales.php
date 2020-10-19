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

    /**
     * Get the user that owns the sales.
     */
    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }
}
