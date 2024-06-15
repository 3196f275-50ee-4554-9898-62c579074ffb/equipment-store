<div>
    <h2 class="text-2xl text-center text-gray-600 font-bold">Корзина</h2>
    <div class="space-y-4 mt-4">
        @foreach($cart as $productId => $quantity)
            @php
            $item = \App\Models\Equipment::find($productId);
            @endphp
            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                @switch($item->type)
                    @case("эксковатор_погрузчик")
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/эксковатор_погрузчик.png') }}" alt="product image" />
                    @break
                    @case("камаз")
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/камаз.png') }}" alt="product image" />
                    @break
                    @case("дорожный_каток")
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/дорожный_каток.png') }}" alt="product image" />
                    @break
                    @case("самоходный_кран")
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/самоходный_кран.png') }}" alt="product image" />
                    @break
                    @case("высотный_кран")
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/высотный_кран.png') }}" alt="product image" />
                    @break
                    @default
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/камаз.png') }}" alt="product image" />
                    @break

                @endswitch
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Товар {{ $productId }} - Количество: {{ $quantity }}</h5>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <button wire:click="removeFromCart({{ $productId }})" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Удалить</button>
                </div>
            </a>

        @endforeach
    </div>
    <button type="button" class="w-full py-2 mt-8 ring-1 ring-blue-100 bg-black text-white font-bold rounded-xl">Оформить заказ</button>
</div>
