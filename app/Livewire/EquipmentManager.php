<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Equipment;
use Livewire\WithPagination;

class EquipmentManager extends Component
{
    use WithPagination;

    public $name;
    public $type;
    public $price_per_day;
    public $description;
    public $search = '';
    public $filterType = '';

    protected $rules = [
        'name' => 'required|string',
        'type' => 'required|string',
        'price_per_day' => 'required|numeric',
        'description' => 'nullable|string',
    ];

    public function createEquipment()
    {
        $this->validate();

        Equipment::create([
            'name' => $this->name,
            'type' => $this->type,
            'price_per_day' => $this->price_per_day,
            'description' => $this->description,
        ]);

        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->type = '';
        $this->price_per_day = '';
        $this->description = '';
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

        return view('livewire.equipment-manager', [
            'equipment' => $equipment,
        ]);
    }
}
