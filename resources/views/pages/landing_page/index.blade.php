@extends('layouts.app_user')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Selamat datang di <span>Milla Bonsai & Nursery</span></h1>
        <h2>Menjual berbagai tanaman hias termasuk Bonsai & Kaktus</h2>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Lihat Profil</a>
            <a href="https://www.youtube.com/watch?v=-9jVwVLW2vk" class="glightbox btn-watch-video"><i
                    class="bi bi-play-circle"></i><span>Tonton Video</span></a>
        </div>
    </div>
</section>

<main id="main">
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>Cari tahu selengkapnya <span>tentang kami</span></h3>
                <p>Selengkapnya tentang kami Milla Bonsai & Nursery</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('landingpage/img/picture.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>Selamat datang di Milla Bonsai & Nursery</h3>
                    <p class="fst-italic">
                        Kami menyediakan berbagai macam tanaman hias dan kaktus dari kebun sendiri. 
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>Menjual di berbagai platform</h5>
                                <p>Kami menjual berbagai macam tanaman hias dan kaktus dari kebun sendiri di berbagai platform online shop dan kami memiliki website katalog tanaman hias sendiri</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>Menyediakan berbagai jenis tanaman hias</h5>
                                <p>Kami menyediakan berbagai jenis tanaman hias seperti Adenium, Aglonema, Alokasia, Anthurium, Begonia, Bonsai, Bougenville, Caladium, Calathea, Kadaka, Kaktus, Monstera, Peperomia, Philodendron, Sansivera, Spatuphilum, Sukulen, Syngonium, Tilandsia dan lain - lain</p>
                            </div>
                        </li>
                    </ul>
                    <p>
                        Milla Bonsai & Nursery memiliki banyak jenis tanaman hias dan kaktus dengan harga yang beraneka ragam, Milla Bonsai & Nursery buka tiap hari dari pukul 07.30 - 21.00 WIB dan pada hari minggu pukul 07.00 - 19.30 WIB. Kami dapat melakukan pengiriman tanaman setiap hari pada jam kerja. Happy Gardening!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="{{ 'https://api.whatsapp.com/send/?phone=' . $contacts->phone_number }}">
                        <img src="{{ asset('landingpage/img/social_media/whatsapp.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="{{ $contacts->facebook }}">
                        <img src="{{ asset('landingpage/img/social_media/facebook.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="{{ $contacts->instagram }}">
                        <img src="{{ asset('landingpage/img/social_media/instagram.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="{{ 'mailto:' . $contacts->email }}">
                        <img src="{{ asset('landingpage/img/social_media/gmail.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="{{ $contacts->url }}">
                        <img src="{{ asset('landingpage/img/social_media/shopee.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="{{ $contacts->web }}">
                        <img src="{{ asset('landingpage/img/logo/logo.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="product">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>Kami menyediakan berbagai <span>tanaman hias</span></h3>
                <p>Menyediakan berbagai jenis tanaman hias dan kaktus dari kebun sendiri</p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="product-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $category)
                        <li data-filter="{{ '.filter-' . $category->name }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row product-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 product-item {{ 'filter-' . $product->category->name }}">
                    <img src="{{ asset($product->image) }}" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>{{ $product->name_product }}</h4>
                        <p>{{ $product->category->name }}</p>
                        <a href="{{ $product->image }}" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="{{ $product->name_product }}"><i
                                class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3><span>Tim pengembang</span> kami</h3>
                <p>Selengkapnya tentang tim pengembang kami</p>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset($team->image) }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="{{ $team->github }}"><i class="bi bi-github"></i></a>
                                <a href="{{ $team->facebook }}"><i class="bi bi-facebook"></i></a>
                                <a href="mailto:{{ $team->gmail }}"><i class="bi bi-envelope"></i></a>
                                <a href="{{ $team->instagram }}"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $team->name }}</h4>
                            <span>{{ $team->gmail }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3><span>Kontak kami</span></h3>
                <p>Selengkapnya tentang kontak kami</p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Alamat Kami</h3>
                        <p>{{ $contacts->address }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p>{{ $contacts->email }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bi-whatsapp"></i>
                        <h3>Whatsapp</h3>
                        <p>{{ $contacts->phone_number }}</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15799.569099918574!2d113.7512654!3d-8.1124503!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39c4347e7ac9addf!2sToko%20Mila%20Bonsai!5e0!3m2!1sid!2sid!4v1654359408462!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                    </iframe>
                </div>
                <div class="row col-lg-6 p-0 m-0">
                    <div class="col-lg-6 col-md-6">
                        <div class="info-box mb-4">
                            <i class="bx bi-instagram"></i>
                            <h3>Instagram</h3>
                            <p>{{ $contacts->instagram }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-box mb-4">
                            <i class="bx bi-facebook"></i>
                            <h3>Facebook</h3>
                            <p>{{ $contacts->facebook }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-box mb-4">
                            <i class="bx bi-cart"></i>
                            <h3>Shopee</h3>
                            <p>{{ $contacts->url }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-box mb-4">
                            <i class="bx bi-globe"></i>
                            <h3>Web Katalog</h3>
                            <p>{{ $contacts->web }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('before-script')
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
@endpush