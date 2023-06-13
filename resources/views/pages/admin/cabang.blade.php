@extends('adminlte::page')

@section('title', 'Cabang | SobatKurir')

@section('content_header')
    @livewire('alert.simple-alert')
    <h1>Cabang</h1>
@stop

@section('content')
    <div class="container">
       
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