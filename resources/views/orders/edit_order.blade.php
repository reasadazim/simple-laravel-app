<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit order') }}
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
                    <form method="POST" action="{{ route('update_order', $order->id) }}">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block">
                                    <span class="text-gray-700">Order Number </span><span style="color:red;">*</span>
                                    <input type="number" name="ord_num" class="block w-full mt-1 rounded-md" placeholder=""
                                        value="{{ $order->ord_num }}" readonly/>
                                </label>
                                @error('ord_num')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block">
                                    <span class="text-gray-700">Order Amount</span><span style="color:red;">*</span>
                                    <input type="number" name="ord_amount" class="block w-full mt-1 rounded-md" placeholder=""
                                        value="{{ $order->ord_amount }}" step=".01" required/>
                                </label>
                                @error('ord_amount')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block">
                                    <span class="text-gray-700">Advance Amount</span><span style="color:red;">*</span>
                                    <input type="number" name="advance_amount" class="block w-full mt-1 rounded-md" placeholder=""
                                        value="{{ $order->advance_amount }}" step=".01" required/>
                                </label>
                                @error('advance_amount')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block">
                                    <span class="text-gray-700">Customer</span><span style="color:red;">*</span>
                                        <select id="customer_id" name="customer_id" class="block w-full mt-1 rounded-md" required>
                                            <option>Select</option>
                                            <option value="{{ $order->customer_id }}" selected>{{ $order->customer->cust_name }}</option>
                                            @foreach ($customers as $customer)
                                                @if (($customer->id)==($order->customer_id))
                                                    {{-- Do not show selected item in the agent list --}}
                                                @else
                                                    <option value="{{ $customer->id }}">{{ $customer->cust_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                </label>
                                @error('customer_id')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                         </div>
                         <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block">
                                    <span class="text-gray-700">Order Description</span>
                                    <textarea id="editor" class="block w-full mt-1 rounded-md" name="ord_description"
                                        rows="3">{{ $order->ord_description }}</textarea>
                                </label>
                                @error('ord_description')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                         </div>
                         <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-primary-button type="submit">
                                    Submit
                                </x-primary-button>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
