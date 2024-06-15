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


    <div class="grid grid-cols-1 gap-4">
        @foreach($equipment as $item)
            <div class="p-4 bg-white shadow rounded">
                <h2 class="text-xl font-bold">{{ $item->name }}</h2>
                <p>Тип: {{ $item->type }}</p>
                <p>Цена за день: {{ $item->price_per_day }} руб.</p>
                <p>{{ $item->description }}</p>
            </div>
        @endforeach
    </div>

    {{ $equipment->links() }}
</div>
