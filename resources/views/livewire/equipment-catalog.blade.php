<div>
    <div class="mb-4">
        <input type="text" wire:model="search" placeholder="Поиск по названию" class="form-input">
        <select wire:model="filterType" class="form-select">
            <option value="">Все типы</option>
            <option value="Экскаватор">Экскаватор</option>
            <option value="Бульдозер">Бульдозер</option>
            <option value="Кран">Кран</option>
        </select>
    </div>




    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 pt-32 select-none items-center">
        @foreach($equipment as $item)

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow relative mt-32">

                <a href="#">
                    @switch($item->type)
                        @case("эксковатор_погрузчик")
                            <img class="p-8 rounded-2xl absolute -top-32" src="{{ asset('images/эксковатор_погрузчик.png') }}" alt="product image" />
                        @break
                        @case("камаз")
                            <img class="p-8 rounded-2xl absolute -top-32" src="{{ asset('images/камаз.png') }}" alt="product image" />
                        @break
                        @case("дорожный_каток")
                            <img class="p-8 rounded-2xl absolute -top-32" src="{{ asset('images/дорожный_каток.png') }}" alt="product image" />
                        @break
                        @case("самоходный_кран")
                            <img class="p-8 rounded-2xl absolute -top-32" src="{{ asset('images/самоходный_кран.png') }}" alt="product image" />
                        @break
                        @case("высотный_кран")
                            <img class="p-8 rounded-2xl absolute -top-32" src="{{ asset('images/высотный_кран.png') }}" alt="product image" />
                        @break
                        @default
                            <img class="p-8 rounded-2xl absolute -top-32" src="{{ asset('images/камаз.png') }}" alt="product image" />
                        @break

                    @endswitch
                </a>
                <div class="px-5 pb-5 mt-32" >
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $item->name }}</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900">{{ $item->price_per_day }}</span>
                        <div class="flex space-x-2 items-center">
                            @if(isset($cart[$item->id]))
                                <a href="#" wire:click="removeFromCart({{ $item->id }})" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Удалить</a>
                                <p>|</p>
                                <a href="#" wire:click="addToCart({{ $item->id }})" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Добавить</a>
                            @else
                                <a href="#" wire:click="addToCart({{ $item->id }})" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">В корзину</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{--            <div class="p-4 bg-white shadow rounded">--}}
{{--                <h2 class="text-xl font-bold">{{ $item->name }}</h2>--}}
{{--                <p>Тип: {{ $item->type }}</p>--}}
{{--                <p>Цена за день: {{ $item->price_per_day }} руб.</p>--}}
{{--                <p>{{ $item->description }}</p>--}}
{{--            </div>--}}
        @endforeach
    </div>

    {{ $equipment->links() }}
</div>
