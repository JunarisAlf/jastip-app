@extends('pages.customer.layout.index')
@section('title', 'Hasil Pencarian')

@section('content')

@include('pages.customer.layout.header')
<main>
    <div class="page_header element_to_stick" style="margin-top: 80px"> 
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="search_bar_list">
                        <input type="text" class="form-control" placeholder="Seblak, Basreng, Bakso, dll">
                        <button type="submit"><i class="icon_search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.customer.layout.search-item')
    @include('pages.customer.layout.ads')
    @include('pages.customer.layout.cabang')
    @include('pages.customer.layout.footer')
</main>

@endsection