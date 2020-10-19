<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'phone', 'dob', 'licenseNumber', 'issueState',
        'homeAddress', 'motherName', 'fatherName', 'parentAddress', 'emergencyContact',
        'carMake', 'carModel', 'seatingCapacity', 'licensePlate', 'salesAmount', 'status',
    ];

    public function sales()
    {
        return $this->hasMany('App\Sales');
    }
}
