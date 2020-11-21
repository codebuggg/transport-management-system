@extends('layouts.app')

@section('content')

<div class="mx-auto w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">

    <div class="leading-loose">
        @if (session('status'))
        <div class="bg-teal-lightest border-t-4 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">{{ session('status') }}</p>
                </div>
            </div>
          </div>

        @endif

        <form action="{{ route('driver.store') }}" class="p-10 bg-white rounded shadow-xl" method="POST">
            @csrf
            <p class="text-lg text-gray-800 font-medium pb-4">Driver information</p>
            <div class="">
                <label class="block text-sm text-gray-600 mt-2 w-1/2" for="cus_name">Name</label>

            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">First Name</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="firstname" type="text"  value="{{ $driver->fname }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Last Name</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="lastname" type="text" value="{{ $driver->lname }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 pr-1 w-1/2">
                <label class="inline-block text-sm text-gray-600" for="cus_email">Phone </label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="phone" type="tel" value="{{ $driver->phone }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="cus_email">Date of Birth</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="dob" type="date" value="{{ $driver->dob }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 pr-1 w-1/2">
                <label class="inline-block text-sm text-gray-600" for="cus_email">Driver's license </label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="license_number" type="text" value="{{ $driver->licenseNumber }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="cus_email">State</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="state" type="text" value="{{ $driver->issueState }}" aria-label="Email">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="address" type="text" value="{{ $driver->homeAddress }}" aria-label="Email">
            </div>

            <p class="text-lg text-gray-800 font-medium py-4">Parent's Information</p>

            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Mother's Name</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="mother_name" type="text" value="{{ $driver->motherName }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Father's Name</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="father_name" type="text" value="{{ $driver->fatherName }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">homeAddress</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="parent_address" type="text" value="{{ $driver->parentAddress }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">parent'sPhone</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="emergency_contact" type="text" value="{{ $driver->emergencyContact }}" aria-label="Email">
            </div>

            <p class="text-lg text-gray-800 font-medium py-4">Car Information</p>

            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Make</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="car_make" type="text" value="{{ $driver->carMake }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Model</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="car_model" type="text" value="{{ $driver->carModel }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">SeatingCapacity</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="seating_capacity" type="text" value="{{ $driver->seatingCapacity }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">licensePlate</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="license_plate" type="text" value="{{ $driver->licensePlate }}" aria-label="Email">
            </div>
            <p class="text-lg text-gray-800 font-medium py-4">Payment Information</p>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">SalesAmount</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="sales" type="text" value="{{ $driver->salesAmount }}" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Recurring</label>
                <select name="status" class="block appearance-none w-full bg-white border border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option>{{ $driver->status }}</option>
                    <option>Daily</option>
                    <option>Weekly</option>
                    <option>Bi-Weekly</option>
                    <option>Monthly</option>
                  </select>
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="block text-sm text-gray-600" for="cus_email">Profile Picture</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="picture" type="file"  aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Update Driver</button>
            </div>
        </form>
    </div>
    <p class="pt-6 text-gray-600">

    </p>
</div>

@endsection
