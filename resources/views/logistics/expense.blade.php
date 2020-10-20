@extends('layouts.app')

@section('content')
    <div class="flex flex-col mx-auto w-4/6 py-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="flex justify-between m-2 font-lg font-bold py-2">
               <span> All Expenses</span>
               <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <a href="/expense/create">Add New Expense</a>
              </button>
            </div>
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead>
                  <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      Name
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      Description
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      Status
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      Amount
                    </th>
                    <th class="px-6 py-3 bg-gray-50">Date</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($expenses as $expense)
                  <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                      <div class="flex items-center">
                        <div class="">
                          <div class="text-sm leading-5 font-medium text-gray-900">
                          {{ $expense->driver->fname}} {{ $expense->driver->lname}}
                          </div>
                          <div class="text-sm leading-5 text-gray-500">
                            <span>{{ $expense->driver->licenseNumber}}</span>
                           </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                      <div class="text-sm leading-5 text-gray-900">{{ $expense->description }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{ $expense->status }}
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                    {{ $expense->amount }}
                    </td>
                    <td class="px-6 py-3 whitespace-no-wrap text-right text-sm text-gray-500 leading-5 font-medium">Date
                    {{ $expense->date }}
                    </td>
                  </tr>
                  @endforeach
                  <!-- More rows... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>


 @endsection
