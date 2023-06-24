@extends('adminlte::page')

@section('title', 'Dashboard | SobatKurir')

@section('content_header')
    @if (Session::has('success'))
        <x-adminlte-alert class="" theme="info" title="Info" dismissable>
            Selamat datang {{ Auth::user()->full_name }}
        </x-adminlte-alert>
    @endif
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row">
            @unless (Auth::user()->role == 'admin')
            <div class="col-12 col-sm-6 col-md-6">
                <x-adminlte-info-box title="Uang Masuk" text="Rp."
                    icon="fas fa-lg fa-sign-in-alt text-success" theme="gradient-success" icon-theme="white" />
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <x-adminlte-info-box title="Uang Keluar" text="Rp. "
                    icon="fas fa-lg fa-sign-out-alt text-info" theme="gradient-info" icon-theme="white" />
            </div>
            @endunless
           
        </div>

        <div class="row mt-4">
            <div class="col-12 col-md-6">
                {{-- <x-adminlte-card title="Daftar Hutang" theme="warning" icon="fas fa-wallet">
                    @livewire('home.debt-list', ['hutang' => $hutang])
                </x-adminlte-card> --}}
            </div>
            <div class="col-12 col-md-6">
                {{-- <x-adminlte-card title="Angsuran bulan ini" theme="dark" icon="fas fa-th-list">
                    @livewire('home.incoming-layaway', compact('angsuran'))
                </x-adminlte-card> --}}
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