<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="flex flex-wrap -mx-3 divide-x">
                    <div class="w-full md:w-1/3 px-3 rounded">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <p class="font-sans text-xl font-semibold"># Order</p>
                         </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                            <p><strong>Order Number:</strong> {{ $order->ord_num }}</p>
                            <p><strong>Order Amount:</strong> {{ $order->ord_amount }}</p>
                            <p><strong>Advance Amount</strong> {{ $order->advance_amount }}</p>
                            <p><strong>Order Description</strong> {{ $order->ord_description }}</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                           <p class="font-sans text-xl font-semibold"># Customer</p>
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                            <div class="relative overflow-x-auto sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    <img src="{{ Storage::url($order->customer->cust_photo) }}" alt="{{ $order->customer->cust_name }}" width="300px">
                                </div>
                                <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                                    <p><strong>Customer Code:</strong> {{ $order->customer->cust_code }}</p>
                                    <p><strong>Customer Name:</strong> {{ $order->customer->cust_name }}</p>
                                    <p><strong>Customer City</strong> {{ $order->customer->cust_city }}</p>
                                    <p><strong>Working Area</strong> {{ $order->customer->working_area }}</p>
                                    <p><strong>Country:</strong> {{ $order->customer->cust_country }}</p>
                                    <p><strong>Grade:</strong> {{ $order->customer->grade }}</p>
                                    <p><strong>Opening Amount:</strong> {{ $order->customer->opening_amt }}</p>
                                    <p><strong>Receive Amount:</strong> {{ $order->customer->receive_amt }}</p>
                                    <p><strong>Payment Amount:</strong> {{ $order->customer->payment_amt }}</p>
                                    <p><strong>Outstanding Amount:</strong> {{ $order->customer->outstanding_amt }}</p>
                                    <p><strong>Phone:</strong> {{ $order->customer->phone_no }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <p class="font-sans text-xl font-semibold"># Agent</p>
                         </div>
                         <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                             <div class="relative overflow-x-auto sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    <img src="{{ Storage::url($order->customer->agent->agent_photo) }}" alt="{{ $order->customer->agent->agent_name }}" width="300px">
                                </div>
                                <div class="p-6 text-gray-900 dark:text-gray-100" style="margin-top:-20px;">
                                    <p><strong>Agent Code:</strong> {{ $order->customer->agent->agent_code }}</p>
                                    <p><strong>Agent Name:</strong> {{ $order->customer->agent->agent_name }}</p>
                                    <p><strong>Working Area</strong> {{ $order->customer->agent->working_area }}</p>
                                    <p><strong>Commission:</strong> {{ $order->customer->agent->commission }}</p>
                                    <p><strong>Phone:</strong> {{ $order->customer->agent->phone_no }}</p>
                                    <p><strong>Country:</strong> {{ $order->customer->agent->country }}</p>
                                </div>
                                <div class="p-6" style="margin-top:-20px;">
                                    <x-primary-button>
                                        <a href="http://laraveltest.com/storage/{{ $order->customer->agent->agent_license }}" target="_blank">{{ __('View License') }}</a>
                                    </x-primary-button>
                                </div>
                             </div>
                         </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
