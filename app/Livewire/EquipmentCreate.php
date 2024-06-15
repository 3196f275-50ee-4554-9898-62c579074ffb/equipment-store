<?php

namespace App\Livewire;

use App\Models\Equipment;
use Livewire\Component;

class EquipmentCreate extends Component
{
    public $name;
    public $type;
    public $price_per_day;
    public $description;

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
        return view('livewire.equipment-create');
    }
}
