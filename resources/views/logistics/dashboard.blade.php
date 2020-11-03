@extends('layouts.app')

@section('content')
<div class="flex flex-col mx-auto w-4/6 py-8">
    <div>
        <div class="m-2 font-lg font-bold py-2">Overview</div>
    </div>

    <div class="flex flex-row space-between space-x-4 mx-2">
        <div class="flex flex-col bg-gray-200 shadow rounded-lg w-1/3 text-center">
            <div class="bg-white py-3 flex flex-col p-2 rounded-lg">
                <span class="text-gray-700 font-semibold text-sm py-2">Total Drivers</span>
                <span class="text-2xl">{{ $drivers }}</span>
            </div>
            <div class="py-2">
                <a href="{{ route('drivers') }}" class="text-sm">View all Drivers</a>
            </div>
        </div>

       <div class="flex flex-col bg-gray-200 shadow rounded-lg w-1/3 text-center">
            <div class="bg-white py-3 flex flex-col p-2 rounded-lg">
                <span class="text-gray-700 font-semibold text-sm py-2">Total Sales</span>
                <span class="text-2xl">GH₵ @money($sales_sum) </span>
            </div>
            <div class="py-2">
                <a href="{{ route('sales') }}" class="text-sm">View all Sales</a>
            </div>
        </div>

       <div class="flex flex-col bg-gray-200 shadow rounded-lg w-1/3 text-center">
            <div class="bg-white py-3 flex flex-col p-2 rounded-lg">
                <span class="text-gray-700 font-semibold text-sm py-2">Number of Sales</span>
                <span class="text-2xl">{{ $sales_count }}</span>
            </div>
            <div class="py-2">
                <a href="{{ route('sales') }}" class="text-sm">View all Sales</a>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <div class="m-2 font-lg font-bold py-2">Recent Sales</div>
    </div>

    <div class="bg-white overflow-auto ">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Name
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Next Due Date
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Sales Amount
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Sales Recieved on
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($sales as $sale)
                    <tr>
                      <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                          </div>
                          <div class="ml-4">
                            <div class="text-sm leading-5 font-medium text-gray-900">
                            {{ $sale->driver->fname}} {{ $sale->driver->lname}}
                            </div>
                            <div class="text-sm leading-5 text-gray-500">
                            <span>{{ $sale->driver->licenseNumber}}</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          {{ $sale->next_due_date }}
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        {{ $sale->amount }}
                      </td>
                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">
                          {{ $sale->created_at->toDayDateTimeString() }}
                          </p>
                      </td>
                    </tr>
                    @endforeach
                  <!-- More rows... -->
                </tbody>
            </table>
        </div>
    </div>


@endsection
