<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-2xl font-bold text-gray-800  mb-4">
            Checkout
        </h1>
        <form wire:submit.prevent="placeOrder">
            <div class="grid grid-cols-12 gap-4">
                <div class="md:col-span-12 lg:col-span-8 col-span-12">
                    <!-- Card -->
                    <div class="bg-white rounded-xl shadow p-4 sm:p-7 ">
                        <!-- Shipping Address -->
                        <div class="mb-6">
                            <h2 class="text-xl font-bold underline text-gray-700 mb-2">
                                Shipping Address
                            </h2>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700  mb-1" for="first_name">
                                        First Name
                                    </label>
                                    <input wire:model="first_name"
                                        class=" w-full rounded-lg border py-2 px-3    @error('first_name') border-red-500 @enderror"
                                        id="first_name" type="text">
                                    </input>
                                    @error('first_name')
                                        <div class="text-red-500 text-sm">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700  mb-1" for="last_name">
                                        Last Name
                                    </label>
                                    <input wire:model="last_name"
                                        class=" @error('last_name') border-red-500 @enderror w-full rounded-lg border py-2 px-3   "
                                        id="last_name" type="text">
                                    </input>
                                    @error('last_name')
                                        <div class="text-red-500 text-sm">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700  mb-1" for="phone">
                                    Phone
                                </label>
                                <input wire:model="phone"
                                    class="@error('phone') border-red-500 @enderror w-full rounded-lg border py-2 px-3  "
                                    id="phone" type="text">
                                </input>
                                @error('phone')
                                    <div class="text-red-500 text-sm">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700  mb-1" for="address">
                                    Address
                                </label>
                                <input wire:model="street_address"
                                    class="@error('street_address') border-red-500 @enderror w-full rounded-lg border py-2 px-3 "
                                    id="address" type="text">
                                </input>
                                @error('street_address')
                                    <div class="text-red-500 text-sm">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700  mb-1" for="city">
                                    City
                                </label>
                                <input wire:model="city"
                                    class="@error('city') border-red-500 @enderror w-full rounded-lg border py-2 px-3 "
                                    id="city" type="text">
                                </input>
                                @error('city')
                                    <div class="text-red-500 text-sm">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-700  mb-1" for="state">
                                        State
                                    </label>
                                    <input wire:model="state"
                                        class="@error('state') border-red-500 @enderror w-full rounded-lg border py-2 px-3 "
                                        id="state" type="text">
                                    </input>
                                    @error('state')
                                        <div class="text-red-500 text-sm">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700  mb-1" for="zip">
                                        ZIP Code
                                    </label>
                                    <input wire:model="zip_code"
                                        class="@error('zip_code') border-red-500 @enderror w-full rounded-lg border py-2 px-3"
                                        id="zip" type="text">
                                    </input>
                                    @error('zip_code')
                                        <div class="text-red-500 text-sm">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-lg font-semibold mb-4 ">
                            Select Payment Method
                        </div>
                        <ul class="grid w-full gap-6 md:grid-cols-2">

                            <li>
                                <input wire:model="payment_method" class="hidden peer" id="hosting-small" required=""
                                    type="radio" value="cod" />
                                <label
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100"
                                    for="hosting-small">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">
                                            Cash on Delivery
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                        viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </label>
                            </li>
                            <li>
                                <input class="hidden peer" id="hosting-big" wire:model="payment_method" type="radio"
                                    value="stripe">
                                <label
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100"
                                    for="hosting-big">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">
                                            Stripe
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                        viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </label>
                                </input>
                            </li>
                            <li>
                                <input class="hidden peer" id="payment-khalti" wire:model="payment_method" type="radio"
                                    value="khalti">
                                <label
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100"
                                    for="payment-khalti">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">
                                            Khalti
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                        viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        @error('payment_method')
                            <div class="text-red-500 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <!-- End Card -->
                </div>
                <div class="md:col-span-12 lg:col-span-4 col-span-12">
                    <div class="bg-white rounded-xl shadow p-4 sm:p-7">
                        <div class="text-xl font-bold underline text-gray-700  mb-2">
                            ORDER SUMMARY
                        </div>
                        <div class="flex justify-between mb-2 font-bold">
                            <span>
                                Subtotal
                            </span>
                            <span>
                                {{Number::currency($grand_total, 'NPR')}}
                            </span>
                        </div>
                        <div class="flex justify-between mb-2 font-bold">
                            <span>
                                Taxes
                            </span>
                            <span>
                                {{Number::currency(0, 'NPR')}}
                            </span>
                        </div>
                        <div class="flex justify-between mb-2 font-bold">
                            <span>
                                Shipping Cost
                            </span>
                            <span>
                                {{Number::currency(0, 'NPR')}}
                            </span>
                        </div>
                        <hr class="bg-slate-400 my-4 h-1 rounded">
                        <div class="flex justify-between mb-2 font-bold">
                            <span>
                                Grand Total
                            </span>
                            <span>
                                {{Number::currency($grand_total, 'NPR')}}
                            </span>
                        </div>
                        </hr>
                    </div>
                    <button type="submit"
                        class="bg-green-600 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600 ">
                        <span wire:loading.remove>Place Order</span>
                        <span wire:loading>Processing...</span>
                    </button>
                    <div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 ">
                        <div class="text-xl font-bold underline text-gray-700  mb-2">
                            ITEMS SUMMARY
                        </div>
                        <ul class="divide-y divide-gray-200 " role="list">

                            @foreach ($cart_items as $item)

                                <li class="py-3 sm:py-4" wire:key="{{$item['product_id']}}">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img alt="{{$item['name']}}" class="w-12 h-12 rounded-full"
                                                src="{{url('storage', $item['image'])}}">
                                            </img>
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate ">
                                                {{$item['name']}}
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                {{$item['quantity']}}
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            {{Number::currency($item['total_amount'], 'NPR')}}
                                        </div>
                                    </div>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
    window.addEventListener('khalti-payment', event => {
        const config = {
            publicKey: event.detail.publicKey,
            productIdentity: event.detail.productIdentity,
            productName: event.detail.productName,
            productUrl: event.detail.productUrl,
            eventHandler: {
                onSuccess: function (payload) {
                    Livewire.emit('completeOrder', payload);
                },
                onError: function (error) {
                    console.log(error);
                },
                onClose: function () {
                    console.log('widget is closing');
                }
            }
        };

        const checkout = new KhaltiCheckout(config);
        checkout.show({amount: {{ $grand_total * 100 }}});
    });
</script>
</div>
