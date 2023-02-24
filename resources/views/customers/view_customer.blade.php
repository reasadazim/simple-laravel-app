<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customer Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 rounded">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <img src="{{ Storage::url($customer->cust_photo) }}" alt="{{ $customer->cust_name }}" width="300px">
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                            <p><strong>Customer Code:</strong> {{ $customer->cust_code }}</p>
                            <p><strong>Customer Name:</strong> {{ $customer->cust_name }}</p>
                            <p><strong>Customer City</strong> {{ $customer->cust_city }}</p>
                            <p><strong>Working Area</strong> {{ $customer->working_area }}</p>
                            <p><strong>Country:</strong> {{ $customer->cust_country }}</p>
                            <p><strong>Grade:</strong> {{ $customer->grade }}</p>
                            <p><strong>Opening Amount:</strong> {{ $customer->opening_amt }}</p>
                            <p><strong>Receive Amount:</strong> {{ $customer->receive_amt }}</p>
                            <p><strong>Payment Amount:</strong> {{ $customer->payment_amt }}</p>
                            <p><strong>Outstanding Amount:</strong> {{ $customer->outstanding_amt }}</p>
                            <p><strong>Phone:</strong> {{ $customer->phone_no }}</p>
                        </div>
                    </div>
                    <div class="w-full md:w-4/6 px-3">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                           <p class="font-sans text-xl font-semibold"># List of orders of this customer</p>
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                            @if (count($orders)>0)
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Order Number
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Amount
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                View
                                            </th>                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ $order->ord_num }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $order->ord_amount }}
        
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="{{ route('view_order', $order->id) }}">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="relative overflow-x-auto">
                                This customer has no orders.
                            </div>
                            @endif
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
