<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Table extends Component
{
    public $orders = [];
    protected $listeners = ['refresh_table' => 'refresh'];
    public function refresh(){
        $this->orders = Order::with('items')->where('status', '!=','done')->get();
    }
    public function proccess($id){
        $this->emit('proccess', $id);
    }
    public function mount(){
        $user = auth()->user();
        $this->orders = Order::with('items')->where('status', '!=','done')->get();
        
    }
    public function render(){
        return view('livewire.order.table');
    }
}
