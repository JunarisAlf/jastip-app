@extends('pages.customer.layout.index')
@section('title', 'Order')

@section('css')
    <link href={{asset('vendor/themplate/css/order-sign_up.css')}} rel="stylesheet">
    <link href={{asset('vendor/themplate/css/detail-page.css')}} rel="stylesheet">
@endsection

@section('content')
    @include('pages.customer.layout.header')

    <main class="bg_gray" style="padding-top: 30px">
        <div class="container margin_60_40">
		    <div class="row justify-content-center">
		        <div class="col-lg-4">
		        	<div class="box_order_form">
		                <div class="head text-center">
		                    <h3>Menunggu Konfirmasi Admin</h3>
		                    Jika pesanan anda lama diproses <a href="{{"https://wa.me/". session()->get('wa_number')}}" target="_blank">hubungi admin</a>
		                </div>
		                <!-- /head -->
		                <div class="main">
		                	<div id="confirm">
								<div class="icon icon--order-success svg add_bottom_15">
									<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
										<g fill="none" stroke="#8EC343" stroke-width="2">
											<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
											<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
										</g>
									</svg>
								</div>
								<h3>Pesanan Dibuat!</h3>
								<p>Admin akan memproses pesanan mu!</p>
							</div>
		                </div>
		            </div>
		            <!-- /box_booking -->
		        </div>
		        <!-- /col -->
		    </div>
		    <!-- /row -->
		</div>
        @include('pages.customer.layout.footer')
    </main>


@endsection