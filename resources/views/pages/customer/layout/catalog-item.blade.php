<div class="bg_gray">
    <div class="container margin_detail">
        <div class="row">
            <div class="col-lg-8 list_menu">
                <section id="section-1">
                    <h4>Produk</h4>
                    @livewire('catalog.items', ['products' => $toko->products])
                </section>
            </div>
            <!-- /col -->
            @livewire('catalog.order')

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>