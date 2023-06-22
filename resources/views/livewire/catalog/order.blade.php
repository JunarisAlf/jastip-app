<div class="col-lg-4" id="sidebar_fixed">
    <div class="box_order mobile_fixed">
        <div class="head">
            <h3>Pesanan Anda</h3>
            <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
        </div>
        <!-- /head -->
        <div class="main">
            <ul class="clearfix">
                @php
                    $pesanan = [];
                    $total = 0;
                    if($orders != null){
                        foreach ($orders as $id => $qty) {
                            $item = App\Models\Product::find($id);
                            $total += $item->price * $qty;
                            array_push($pesanan, ['item' => $item, 'qty' => $qty]);
                        }
                    }
                @endphp
                @foreach ($pesanan as $p)
                    <li>
                        <a href="#0">{{$p['qty']}}X {{$p['item']->name}}</a>
                        <span>{{number_format($p['item']->price * $p['qty'], 0, ',', '.') }}</span>
                    </li>
                @endforeach
               
                
            </ul>
            <ul class="clearfix">
                <li class="total">Total<span>{{number_format($total, 0, ',', '.') }}</span></li>
            </ul>
            <div class="btn_1_mobile">
                <a href="order.html" class="btn_1 gradient full-width mb_5">Next</a>
                {{-- <div class="text-center"><small>Setelah in</small></div> --}}
            </div>
            </div>
        </div>
        
    </div>
    <!-- /box_order -->
    <div class="btn_reserve_fixed"><a href="#0" class="btn_1 gradient full-width">Lihat Order</a></div>
</div>