<?php

namespace App\Http\Livewire\Kurir;

use App\Models\Kurir;
use Livewire\Component;

class Table extends Component
{
    public $kurirs = [];
    public function mount(){
        $this->kurirs = Kurir::all();
    }
    protected $listeners = ['refresh_kurir_table' => 'refresh'];
    public function refresh(){
        $this->kurirs = Kurir::all();
    }

    public function edit($id){
        $this->emit('edit_kurir', $id);
    }
    public function delete($id, $full_name){
        $this->emit('delete_kurir', $id, $full_name);
    }
    public function render(){
        return view('livewire.kurir.table');
    }
}
