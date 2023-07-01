<div class="container margin_30_60">
    <div class="main_title center">
        <span><em></em></span>
        <h2>Layanan</h2>
        <p>Banyak Layanan Untuk Semua Kebutuhan Kamu!</p>
    </div>
    <div class="service-container">
        <a href="/">
            <img src="{{asset('storage/services/food.png')}}" alt="">
            <span class="service-text">Kuliner</span>
        </a>
        <a href="#" class="unavailable-services">
            <span class="badge">Akan Datang</span>
            <img src="{{asset('storage/services/ojek.png')}}" alt="">
            <span class="service-text">Ojek</span>
        </a>
        <a href="#" class="unavailable-services">
            <span class="badge">Akan Datang</span>
            <img src="{{asset('storage/services/paket.png')}}" alt="">
            <span class="service-text">Paket</span>
        </a>
        <a href="#" class="unavailable-services">
            <span class="badge">Akan Datang</span>
            <img src="{{asset('storage/services/pasar.png')}}" alt="">
            <span class="service-text">Pasar</span>
        </a>
        <a href="#" class="unavailable-services">
            <span class="badge">Akan Datang</span>
            <img src="{{asset('storage/services/print.png')}}" alt="">
            <span class="service-text">Printing</span>
        </a>
        <a href="#" class="unavailable-services">
            <span class="badge">Akan Datang</span>
            <img src="{{asset('storage/services/topup.png')}}" alt="">
            <span class="service-text">TopUp</span>
        </a>
        <a href="#" class="unavailable-services">
            <span class="badge">Akan Datang</span>
            <img src="{{asset('storage/services/travel.png')}}" alt="">
            <span class="service-text">Travel</span>
        </a>
        <a href="#" class="unavailable-services">
            <span class="badge">Akan Datang</span>
            <img src="{{asset('storage/services/warung.png')}}" alt="">
            <span class="service-text">Warung</span>
        </a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let items = document.getElementsByClassName('unavailable-services');
            for (var i = 0; i < items.length; i++) {
                items[i].addEventListener('click', function() {
                    alert('Layanan Belum Tersedia Untuk Saat Ini!');
                });
            }
        });
    </script>
</div>