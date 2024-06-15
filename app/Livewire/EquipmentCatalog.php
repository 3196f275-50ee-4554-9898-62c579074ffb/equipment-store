<?php

namespace App\Livewire;

use App\Models\Equipment;
use Livewire\Component;
use Livewire\WithPagination;

class EquipmentCatalog extends Component
{
    use WithPagination;
    public $search = '';
    public $filterType = '';

    public $cart;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function addToCart($productId)
    {
        $this->cart[$productId] = isset($this->cart[$productId]) ? $this->cart[$productId] + 1 : 1;
        session()->put('cart', $this->cart);
    }

    public function render()
    {
        $equipmentQuery = Equipment::query();

        if ($this->search) {
            $equipmentQuery->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->filterType) {
            $equipmentQuery->where('type', $this->filterType);
        }

        $equipment = $equipmentQuery->paginate(10);

        return view('livewire.equipment-catalog', [
            'equipment' => $equipment,
        ]);
    }
}
