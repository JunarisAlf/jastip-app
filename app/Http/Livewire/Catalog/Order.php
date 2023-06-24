<?php

namespace App\Http\Livewire\Catalog;

use Livewire\Component;

class Order extends Component
{
    protected $listeners = ['inc' => 'inc', 'dec' => 'dec'];
    public $orders = [];
    
    public function inc($id){
        if (array_key_exists($id, $this->orders)) {
            $this->orders[$id] += 1;
        }else{
            $this->orders[$id] = 1;
        }
        $this->emit('counter_changed',$id, $this->orders); 
    }

    public function dec($id){
        if(isset($this->orders[$id])){
            if($this->orders[$id] == 1){
                unset($this->orders[$id]);
            }else{
                $this->orders[$id] -= 1;
            }
            $this->emit('counter_changed',$id, $this->orders); 
        }
    }
    public function next(){
        session()->put('orders', $this->orders);
        redirect()->route('front.order');
    }
    public function render()  {
        return view('livewire.catalog.order');
    }
}
