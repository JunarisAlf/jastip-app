@extends('adminlte::page')

@section('title', 'Cabang | SobatKurir')

@section('content_header')
    @livewire('cabang.update')
    @livewire('cabang.delete')
    @livewire('alert.simple-alert')
    <h1>Cabang</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('cabang.create')
                <x-adminlte-card title="Laporan Transaksi" theme="success" icon="fas fa-boxes">
                    @livewire('cabang.table')
                </x-adminlte-card>
            </div>
        </div>

    </div>
@stop

{{-- @section('plugins.TempusDominusBs4', true) --}}
{{-- @section('plugins.DateRangePicker', true) --}}
@section('css')
    @livewireStyles
    <script src="//unpkg.com/alpinejs" defer></script>
@stop

@section('js')
    @livewireScripts
@stop