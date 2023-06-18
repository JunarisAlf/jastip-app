<?php

namespace App\Http\Livewire\Toko;

use App\Models\Toko;
use Livewire\Component;

class Table extends Component
{
    public $tokos = [];
    public function mount(){
        $this->tokos = Toko::orderBy('cabang_id', 'DESC')->orderBy('id', 'DESC')->get();
    }
    protected $listeners = ['refresh_toko_table' => 'refresh'];
    public function refresh(){
        $this->tokos = Toko::orderBy('cabang_id', 'DESC')->orderBy('id', 'DESC')->get();
    }
    public function edit($id){
        $this->emit('edit_toko', $id);
    }
    public function delete($id, $name){
        $this->emit('delete_toko', $id, $name);
    }
    public function render(){
        return view('livewire.toko.table');
    }
}
