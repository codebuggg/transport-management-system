@extends('layouts.app')

@section('content')

<div class="mx-auto w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">

    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl">
            <p class="text-lg text-gray-800 font-medium pb-4">New Expense Record </p>

            <div class="inline-block mt-2 -mx-1 pl-1 w-full">
                <label class="inline-block text-sm text-gray-600" for="cus_email">Driver </label>
                <select name="driver" class="block appearance-none w-full bg-white border border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option selected disabled>Choose a driver</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}">{{ $driver->fname }} {{ $driver->lname }}</option>
                    @endforeach
                  </select>
            </div>


            <div class="inline-block mt-2 pr-1 w-1/2">
                <label class="inline-block text-sm text-gray-600" for="cus_email">Amount </label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="tel" required="" placeholder="Amount" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="cus_email">Next due date</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="date" required="" placeholder="Next Sale Date" aria-label="Email">
            </div>

            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Add Record</button>
            </div>
    </div>
    <p class="pt-6 text-gray-600">

    </p>
</div>

@endsection
