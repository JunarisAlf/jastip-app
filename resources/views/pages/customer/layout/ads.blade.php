<div class="bg_white">
    <div class="container margin_60">
        <div class="main_title">
            <span><em></em></span>
            <h2>Rekomendasi</h2>
            <p>Intip Yuk! Mana tau kamu suka</p>
        </div>
        <div class="owl-carousel owl-theme carousel_4">
            @foreach ($ads as $ad)
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src={{asset('storage/iklan') . '/' . $ad->banner_img}} class="owl-lazy" alt="" width="460" height="310">
                        </figure>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /carousel -->
    </div>
</div>