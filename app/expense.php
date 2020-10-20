<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'driver_id', 'amount', 'description', 'date', 
    ];

    /**
     * Get the user that owns the sales.
     */
    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }
}
