<?php

namespace App\Http\Livewire\Toko;

use App\Models\Cabang;
use App\Models\Toko;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;
    public $name, $description, $wa_number, $address, $latlong, $file_cover, $file_profile, $cabang_id;
    public $cabangs = [];
    public $rules = [
        'name'          => 'required|string',
        'description'   => 'required|string',
        'wa_number'     => 'required|string|starts_with:628|unique:tokos,wa_number',
        'address'       => 'required|string',
        'latlong'       => 'required|string',
        'file_cover'    => 'required|mimes:jpg,png,jpeg|max:1024',
        'file_profile'  => 'required|mimes:jpg,png,jpeg|max:1024',
        'cabang_id'     => 'required|exists:cabangs,id'
    ];
    public function mount(){
        $this->cabangs = Cabang::all();
    }
    public function store(){
        $validatedData = $this->validate();

        //file uplaod
        $cover_filename = Str::random(40) . '.' . $this->file_cover->getClientOriginalExtension();
        $profile_filename = Str::random(40) . '.' . $this->file_profile->getClientOriginalExtension();
        $this->file_cover->storeAs('public/toko', $cover_filename);
        $this->file_profile->storeAs('public/toko', $profile_filename);
        $validatedData['cover_img'] = $cover_filename;
        $validatedData['profile_img'] = $profile_filename;

        //latlong extract
        $latlong = explode(',', str_replace(' ', '', $this->latlong));
        $validatedData['lat'] = floatval($latlong[0]);
        $validatedData['long'] = floatval($latlong[1]);

        Toko::create($validatedData);
        $this->resetExcept('cabangs');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan Toko '. $this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->emit('refresh_toko_table');
    }
    public function render(){
        return view('livewire.toko.create');
    }
}
