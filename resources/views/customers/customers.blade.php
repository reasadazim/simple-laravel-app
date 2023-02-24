<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>
    @if (session('status'))
    <div id="exampleWrapper" class="flex flex-col items-end pt-6 pr-6">
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 shadow-lg bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">{{ session('status') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
    @endif
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-1 mb-4">
                        <x-primary-button>
                            <a href="{{ route('add_customer') }}">{{ __('Add new customer') }}</a>
                        </x-primary-button>
                    </div>
                    <div class="relative overflow-x-auto">
                        @if (count($customers)>0)
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display" id="example" >
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Customer ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Customer Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Orders
                                    </th> 
                                    <th scope="col" class="px-6 py-3">
                                        Agent Name
                                    </th>    
                                    <th scope="col" class="px-6 py-3">
                                        View
                                    </th>                                    
                                    <th scope="col" class="px-6 py-3">
                                        Edit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $customer->cust_code }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $customer->cust_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ count($customer->orders) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $customer->agent->agent_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('view_customer', $customer->id) }}" class="px-4 py-2 text-white bg-emerald-700 hover:bg-emerald-800 cursor-pointer rounded">View</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('edit_customer', $customer->id) }}" class="px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 cursor-pointer rounded">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('delete_customer', $customer->id) }}" method="GET"
                                            onsubmit="return confirm('{{ trans('are You Sure ? ') }}');"
                                            style="display: inline-block;">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="px-4 py-2 text-white bg-red-700 rounded"
                                                value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>      
                        @else
                            No agent found. <a href="{{ route('add_customer') }}" class="text-blue-600">Please add new customer.</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
