@extends('layouts.app')

@section('content')

<div class="flex flex-col mx-auto mt-8 w-4/6 py-8 bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Applicant Information
      </h3>
      <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
        Personal details and application.
      </p>
      <div class="pt-4">
      <img class="h-16 w-16 rounded-full " src="avatar.jpg">
      </div>
    </div>
    <div>
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-2 sm:px-6">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Full name
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->fname }} {{ $driver->lname }}
          </dd>
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Phone Number
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->phone }} 
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-2 sm:px-6">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Date of Birth
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->dob }} 
          </dd>
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Driver's License
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->licenseNumber }} 
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-2 sm:px-6">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            State of issue
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->issueState }} 
          </dd>
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Address
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->homeAddress }} 
          </dd>
        </div>
        <div class="px-4 py-5 sm:px-6">
          <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-900">
            Parent's Information 
          </p>
         </div>
        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-6 sm:gap-2 sm:px-6">
          <dt class="text-sm leading-5 font-medium text-gray-500">
          Mother's Name
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->motherName }}
          </dd>
          <dt class="text-sm leading-5 font-medium text-gray-500">
          Father's Name
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->fatherName }} 
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-2 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Parent's Address
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->parentAddress }}
          </dd>
          <dt class="text-sm leading-5 font-medium text-gray-500">
          Emergency Contact
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->emergencyContact }} 
          </dd>
        </div>
        <div class="px-4 py-5 sm:px-6">
          <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-900">
            Car Information 
          </p>
         </div>
        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-6 sm:gap-2 sm:px-6">
          <dt class="text-sm leading-5 font-medium text-gray-500">
          Car Make
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->carMake }}
          </dd>
          <dt class="text-sm leading-5 font-medium text-gray-500">
          Car Model
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->carModel }} 
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-2 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Seating Capacity
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->seatingCapacity }}
          </dd>
          <dt class="text-sm leading-5 font-medium text-gray-500">
          License Plate
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->licensePlate }} 
          </dd>
        </div>
        <div class="px-4 py-5 sm:px-6">
          <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-900">
            Payment Information 
          </p>
         </div>
        <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-6 sm:gap-2 sm:px-6">
          <dt class="text-sm leading-5 font-medium text-gray-500">
          Sale Amount
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->salesAmount }}
          </dd>
          <dt class="text-sm leading-5 font-medium text-gray-500">
          Recurring
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $driver->status }} 
          </dd>
        </div>

       
      </dl>
    </div>
  </div>

@endsection
