<div class="mb-4">
    <input type="text" wire:model="name" placeholder="Название" class="form-input">
    <input type="text" wire:model="type" placeholder="Тип" class="form-input">
    <input type="number" wire:model="price_per_day" placeholder="Цена за день" class="form-input">
    <textarea wire:model="description" placeholder="Описание" class="form-textarea"></textarea>
    <button wire:click="createEquipment" class="btn btn-primary">Создать</button>
</div>
