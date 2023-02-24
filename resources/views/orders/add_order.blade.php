<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add new order') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('save_order') }}">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block">
                                    <span class="text-gray-700">Order Number </span><span style="color:red;">*</span>
                                    <input type="number" name="ord_num" class="block w-full mt-1 rounded-md" placeholder=""
                                        value="{{ old('ord_num') }}" required/>
                                </label>
                                @error('ord_num')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block">
                                    <span class="text-gray-700">Order Amount</span><span style="color:red;">*</span>
                                    <input type="number" name="ord_amount" class="block w-full mt-1 rounded-md" placeholder=""
                                        value="{{ old('ord_amount') }}" step=".01" required/>
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
                                        value="{{ old('advance_amount') }}" step=".01" required/>
                                </label>
                                @error('advance_amount')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block">
                                    <span class="text-gray-700">Customer</span><span style="color:red;">*</span>
                                        <select id="customer_id" name="customer_id" class="block w-full mt-1 rounded-md" required>
                                            <option value="">Select</option>
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->cust_name }}</option>
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
                                        rows="3">{{ old('ord_description') }}</textarea>
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
