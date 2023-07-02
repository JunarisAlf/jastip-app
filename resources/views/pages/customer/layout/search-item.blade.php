<div class="bg_gray">
    <div class="container margin_60_40">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12"><h2 class="title_small">Daftar Makanan</h2></div>
                @if(count($products) > 0)
                    @foreach ($products as $product)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src={{asset('storage/product/' . $product->product_img)}} data-src={{asset('storage/product/' . $product->product_img)}} class="img-fluid lazy" alt="">
                                    <a href="{{route('front.catalog', ['slug' => $product->toko->slug])}}" class="strip_info">
                                        <small>Rp. {{number_format($product->price, 0, ',', '.')}}</small>
                                        <div class="item_title">
                                            <h3>{{$product->name}}</h3>
                                            <small>{{$product->toko->name}}</small><br>
                                            <small>{{$product->toko->cabang->name}}</small>
                                        </div>
                                    </a>
                                </figure>
                                {{-- <ul>
                                    <li><span class="deliv yes">Delivery</span></li>
                                </ul> --}}
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Pencarian untuk <strong>"{{request()->cari}}"</strong> tidak ditemukan</p>
                @endif
               
                
                
              
            </div>
    
        </div>
    </div>
</div>
