@extends('layouts.app')

@section('content')

<div class="mx-auto w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">

    <div class="leading-loose">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
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
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="firstname" type="text" required="" placeholder="First Name" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Last Name</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="lastname" type="text" required="" placeholder="Last Name" aria-label="Email">
            </div>
            <div class="inline-block mt-2 pr-1 w-1/2">
                <label class="inline-block text-sm text-gray-600" for="cus_email">Phone </label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="phone" type="tel" required="" placeholder="Phone Number" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="cus_email">Date of Birth</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="dob" type="date" required="" placeholder="Date Of Birth" aria-label="Email">
            </div>
            <div class="inline-block mt-2 pr-1 w-1/2">
                <label class="inline-block text-sm text-gray-600" for="cus_email">Driver's license </label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="license_number" type="text" required="" placeholder="Driver's License Number" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="cus_email">State</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="state" type="text" required="" placeholder="State of issue" aria-label="Email">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="address" type="text" required="" placeholder="Home Address" aria-label="Email">
            </div>

            <p class="text-lg text-gray-800 font-medium py-4">Parent's Information</p>

            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Mother's Name</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="mother_name" type="text" required="" placeholder="Mother's Name" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Father's Name</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="father_name" type="text" required="" placeholder="Father's Name" aria-label="Email">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">homeAddress</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="parent_address" type="text" required="" placeholder="Home Addess" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">parent'sPhone</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="emergency_contact" type="text" required="" placeholder="Emergency Contact" aria-label="Email">
            </div>

            <p class="text-lg text-gray-800 font-medium py-4">Car Information</p>

            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Make</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="car_make" type="text" required="" placeholder="Make" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Model</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="car_model" type="text" required="" placeholder="Model" aria-label="Email">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">SeatingCapacity</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="seating_capacity" type="text" required="" placeholder="Seating Capacity" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">licensePlate</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="license_plate" type="text" required="" placeholder="License Plate" aria-label="Email">
            </div>
            <p class="text-lg text-gray-800 font-medium py-4">Payment Information</p>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">SalesAmount</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="sales" type="text" required="" placeholder="Sales to be made" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Recurring</label>
                <select name="status" class="block appearance-none w-full bg-white border border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option>Daily</option>
                    <option>Weekly</option>
                    <option>Bi-Weekly</option>
                    <option>Monthly</option>
                  </select>
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="block text-sm text-gray-600" for="cus_email">Profile Picture</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="picture" type="file" required="" placeholder="upload image" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Add Driver</button>
            </div>
        </form>
    </div>
    <p class="pt-6 text-gray-600">

    </p>
</div>

@endsection
