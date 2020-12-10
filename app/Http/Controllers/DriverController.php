<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logistics.drivers',[
            'drivers' => Driver::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logistics.newDriver');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Set file attributes.
        $filepath = 'upload/drivers/images';
        $file = $request->file('profile-picture');
        $filename = $request->input('license_number'). ' ' . $file->getClientOriginalName(); 

        // Upload to S3, overwriting if filename exists.
        // File::streamUpload($filepath, $filename, $file, true);
        // $path = Storage::disk('s3')->put($filepath.'/'.$filename, fopen($file, 'r+'), 'public');
        // dd($request->file('profile-picture'));
        $driver = Driver::create([
            'fname' => $request->input('firstname'),
            'lname' => $request->input('lastname'),
            'phone' => $request->input('phone'),
            'dob' => $request->input('dob'),
            'licenseNumber' => $request->input('license_number'),
            'issueState' => $request->input('state'),
            'homeAddress' => $request->input('address'),
            'motherName' => $request->input('mother_name'),
            'fatherName' => $request->input('father_name'),
            'parentAddress' => $request->input('parent_address'),
            'emergencyContact' => $request->input('emergency_contact'),
            'carMake' => $request->input('car_make'),
            'carModel' => $request->input('car_model'),
            'seatingCapacity' => $request->input('seating_capacity'),
            'licensePlate' => $request->input('license_plate'),
            'profile_picture_url' => $filepath.'/'.$filename,
            'salesAmount' => $request->input('sales'),
            'status' => $request->input('status'),
        ]);

        return redirect('/drivers/create')->with('status', 'New Driver Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('logistics.viewdriver', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('logistics.editDriver', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
