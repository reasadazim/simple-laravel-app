<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agent Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 rounded">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <img src="{{ Storage::url($agent->agent_photo) }}" alt="{{ $agent->agent_name }}" width="300px">
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                            <p><strong>Agent Code:</strong> {{ $agent->agent_code }}</p>
                            <p><strong>Agent Name:</strong> {{ $agent->agent_name }}</p>
                            <p><strong>Working Area</strong> {{ $agent->working_area }}</p>
                            <p><strong>Commission:</strong> {{ $agent->commission }}</p>
                            <p><strong>Phone:</strong> {{ $agent->phone_no }}</p>
                            <p><strong>Country:</strong> {{ $agent->country }}</p>
                        </div>
                        <div class="p-6" style="margin-top:-20px;">
                            <x-primary-button>
                                <a href="http://laraveltest.com/storage/{{ $agent->agent_license }}" target="_blank">{{ __('View License') }}</a>
                            </x-primary-button>
                        </div>
                    </div>
                    <div class="w-full md:w-4/6 px-3">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                           <p class="font-sans text-xl font-semibold"># List of customers of this agent</p>
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                            @if (count($customers)>0)
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Customer Code
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Customer Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Orders
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                View
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
                                                <a href="{{ route('view_customer', $customer->id) }}">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="relative overflow-x-auto">
                                This agent has no customers.
                            </div>
                            @endif
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
