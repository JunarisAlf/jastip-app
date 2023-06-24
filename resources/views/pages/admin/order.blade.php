@extends('adminlte::page')

@section('title', 'Order | SobatKurir')

@section('content_header')
    @livewire('alert.simple-alert')
    @livewire('order.modal')

    <h1>Order</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <x-adminlte-card title="Daftar Kurir" theme="success" icon="fas fa-route">
                    @livewire('order.table')
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