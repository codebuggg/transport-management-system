<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        'profile_picture_url',
    ];

    public function sales()
    {
        return $this->hasMany('App\Sales');
    }

    public function showProdilePicture()
    {
        // return Storage::disk('s3')->response($this->profile_picture_url);

        return Storage::disk('s3')->url($this->profile_picture_url);
    }
}
