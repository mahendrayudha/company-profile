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
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About</h2>
                <h3>Find Out More <span>About Us</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('landingpage/img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata
                                    redi</p>
                            </div>
                        </li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('landingpage/img/clients/client-1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('landingpage/img/clients/client-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('landingpage/img/clients/client-3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('landingpage/img/clients/client-4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('landingpage/img/clients/client-5.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('landingpage/img/clients/client-6.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Services</h2>
                <h3>Check our <span>Services</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="product">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>product</h2>
                <h3>Check our <span>product</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="product-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>
            <div class="row product-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 product-item filter-app">
                    <img src="assets/img/product/product-1.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="assets/img/product/product-1.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-item filter-web">
                    <img src="assets/img/product/product-2.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="assets/img/product/product-2.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-item filter-app">
                    <img src="assets/img/product/product-3.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="assets/img/product/product-3.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-item filter-card">
                    <img src="assets/img/product/product-4.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="assets/img/product/product-4.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-item filter-web">
                    <img src="assets/img/product/product-5.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="assets/img/product/product-5.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-item filter-app">
                    <img src="assets/img/product/product-6.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="assets/img/product/product-6.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-item filter-card">
                    <img src="assets/img/product/product-7.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="assets/img/product/product-7.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-item filter-card">
                    <img src="assets/img/product/product-8.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="assets/img/product/product-8.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-item filter-web">
                    <img src="assets/img/product/product-9.jpg" class="img-fluid" alt="">
                    <div class="product-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="assets/img/product/product-9.jpg" data-gallery="productGallery"
                            class="product-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="product-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hardworking <span>Team</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
                <h3><span>Contact Us</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
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