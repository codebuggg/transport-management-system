@extends('layouts.app')

@section('content')

<div class="mx-auto w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">

    <div class="leading-loose">
    @if (session('status'))
        <div class="bg-green-100 border-t-4 border-teal rounded-b text-green-700 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">{{ session('status') }}</p>
                </div>
            </div>
        </div>
        @endif
        <form action="{{ route('expense.store') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
            @csrf
            <p class="text-lg text-gray-800 font-medium pb-4">New Expense Record </p>

            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
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
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="amount" type="tel" required="" placeholder="Amount" aria-label="Email">
            </div>
            <div class="inline-block mt-2 pr-1 w-1/2">
                <label class="inline-block text-sm text-gray-600" for="cus_email">paid by </label>
                <select name="status" class="block appearance-none w-full bg-white border border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option value="driver">Paid by Driver</option>
                    <option value="company">Paid by Company</option>
                  </select>
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="cus_email">Date</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="date" type="date" required="" placeholder="Next Sale Date" aria-label="Email">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="cus_email">Description</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="description" type="text" required="" placeholder="Expense Description" aria-label="Email">
            </div>

            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Add Record</button>
            </div>
    </div>
    <p class="pt-6 text-gray-600">

    </p>
</div>

@endsection
