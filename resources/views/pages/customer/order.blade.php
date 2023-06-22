@extends('pages.customer.layout.index')
@section('title', 'Order')

@section('css')
    <link href={{asset('vendor/themplate/css/order-sign_up.css')}} rel="stylesheet">
    <link href={{asset('vendor/themplate/css/detail-page.css')}} rel="stylesheet">
@endsection

@section('content')
    @include('pages.customer.layout.header')

    <main class="bg_gray" style="padding-top: 30px">
        <div class="container margin_60_20">
		    <div class="row justify-content-center">
		        <div class="col-xl-6 col-lg-8">
		        	<div class="box_order_form">
					    <div class="head">
					        <div class="title">
					            <h3>Personal Details</h3>
					        </div>
					    </div>
					    <!-- /head -->
					    <div class="main">
					        <div class="form-group">
					            <label>First and Last Name</label>
					            <input class="form-control" placeholder="First and Last Name">
					        </div>
					        <div class="row">
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>Email Address</label>
					                    <input class="form-control" placeholder="Email Address">
					                </div>
					            </div>
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>Phone</label>
					                    <input class="form-control" placeholder="Phone">
					                </div>
					            </div>
					        </div>
					        <div class="form-group">
					            <label>Full Address</label>
					            <input class="form-control" placeholder="Full Address">
					        </div>
					        <div class="row">
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>City</label>
					                    <input class="form-control" placeholder="City">
					                </div>
					            </div>
					            <div class="col-md-3">
					                <div class="form-group">
					                    <label>Postal Code</label>
					                    <input class="form-control" placeholder="0123">
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
		        </div>
		        <!-- /col -->
		        <div class="col-xl-4 col-lg-4" id="sidebar_fixed">
		            <div class="box_order">
		                <div class="head">
		                    <h3>Order Summary</h3>
		                    <div>Pizzeria da Alfredo</div>
		                </div>
		                <!-- /head -->
		                <div class="main">
		                	<ul>
		                		<li>Date<span>Today 23/11/2019</span></li>
		                		<li>Hour<span>08.30pm</span></li>
		                		<li>Type<span>Delivery</span></li>
		                	</ul>
		                	<hr>
		                	<ul class="clearfix">
		                		<li><a href="#0">1x Enchiladas</a><span>$11</span></li>
		                		<li><a href="#0">2x Burrito</a><span>$14</span></li>
		                		<li><a href="#0">1x Chicken</a><span>$18</span></li>
		                		<li><a href="#0">2x Corona Beer</a><span>$9</span></li>
		                		<li><a href="#0">2x Cheese Cake</a><span>$11</span></li>
		                	</ul>
		                	
		                	<ul class="clearfix">
		                		<li>Subtotal<span>$56</span></li>
		                		<li>Delivery fee<span>$10</span></li>
		                		<li class="total">Total<span>$66</span></li>
		                	</ul>
		                    <a href="confirm.html" class="btn_1 gradient full-width mb_5">Order Now</a>
		                    <div class="text-center"><small>Or Call Us at <strong>0432 48432854</strong></small></div>
		                </div>
		            </div>
		            <!-- /box_booking -->
		        </div>

		    </div>
		    <!-- /row -->
		</div>
        @include('pages.customer.layout.footer')
    </main>


@endsection