@extends('layouts.main')

@section('container')

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/promo-MLBB.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/promoHSR.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/promoGENSHIN.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/promo-VALORANT.jpg" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection

@section('popular-games')
<div class="container mt-5">
    <h4 style="color: orange">Game Populer</h4>
    <h1 style="color: white">Trending Sekarang</h1>
    
    @include('partials.scrollcard')
@endsection

@section('category-games')

<div class="container justify-content-center align-items-center">
    <ul class="category">
        <li><a href="#" class="category-link active" data-category="mobile">Game Seluler</a></li>
        <li><a href="#" class="category-link" data-category="pc">Game PC</a></li>
    </ul>
<div class="container">
    <div class="card-container mobile"> <!-- Tambahkan class 'mobile' pada card-container -->

        
            @include('partials.card_mobile')
         <!-- Ganti dengan partial untuk game seluler -->

    </div>
    <div class="card-container pc" style="display: none;"> <!-- Sembunyikan card-container untuk PC -->
        @include('partials.card_pc') <!-- Ganti dengan partial untuk game PC -->
    </div>
</div>

    
    
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Menetapkan kategori yang aktif saat halaman dimuat
        var activeCategory = 'mobile';

        // Menangani klik pada tautan kategori
        $('.category-link').on('click', function(e) {
            e.preventDefault();

            // Menghapus class 'active' dari semua tautan kategori
            $('.category-link').removeClass('active');

            // Menambah class 'active' pada tautan kategori yang diklik
            $(this).addClass('active');

            // Mengatur warna teks untuk tautan kategori
            $('.category-link').css('color', 'white'); // Mengembalikan warna teks ke putih
            $(this).css('color', 'orange'); // Mengatur warna teks untuk kategori yang aktif menjadi orange

            // Mendapatkan kategori yang dipilih
            activeCategory = $(this).data('category');

            // Menampilkan hanya card-container yang sesuai dengan kategori yang dipilih
            $('.card-container').hide();
            $('.card-container.' + activeCategory).show();
        });

        // Menampilkan card-container sesuai dengan kategori yang aktif saat halaman dimuat
        $('.card-container.' + activeCategory).show();
    });
</script>
@endsection

@section('support')
    <div class="container mt-5 mb-5">
        <h6 style="color: orange">Dukungan Pelanggan</h6>
        <h1 style="color: white">Hubungi Kami</h1>
        @include('partials.card_support')
    </div>
@endsection

@section('subcription')
   @include('partials.subcription')
@endsection

@section('footer')
    @include('partials.footer')
@endsection
