@extends('adminlte::page')

@section('title', 'Cek Saldo  | SobatKurir')

@section('content_header')
    @livewire('alert.simple-alert')
    <h1>Cek Saldo</h1>
@stop

@section('content')
    <div>
        <form action="{{route('courir.cekSaldo')}}" method="get">
            <x-adminlte-input name="wa" label="Nomor Whatsapp" placeholder="Nomor WA Format (628XXX)" label-class="text-success" required>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-success"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-button  label="Cek saldo" theme="success" class="btn-block" type="submit"/>

        </form>        
    </div>
@stop

@section('css')
    @livewireStyles
    <script src="//unpkg.com/alpinejs" defer></script>
@stop
@section('js')
    @livewireScripts
@stop