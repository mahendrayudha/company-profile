<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3><span>Milla Bonsai & Nursery</span></h3>
                    <p>
                        {{ $contacts->address }} <br>
                        <a href="{{ 'https://api.whatsapp.com/send/?phone=' . $contacts->phone_number }}"><strong>Phone:</strong>
                            {{ $contacts->phone_number }}</a><br>
                        <a href="{{ 'mailto:' . $contacts->email }}"><strong>Email:</strong> {{ $contacts->email
                            }}</a><br>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a class="bx bx-chevron-right" href="#hero">Beranda</a></li>
                        <li><a class="bx bx-chevron-right" href="#about">Profil</a></li>
                        <li><a class="bx bx-chevron-right" href="#product">Produk</a></li>
                        <li><a class="bx bx-chevron-right" href="#team">Tim Pengembang</a></li>
                        <li><a class="bx bx-chevron-right" href="#contact">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Tanaman Hias Kami</h4>
                    <ul>
                        @foreach ($categories as $category)
                        <li><i class="bx bx-chevron-right"></i> <a href="#product">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Sosial Media Kami</h4>
                    <p>Kunjungi halaman media sosial kami untuk update promo tanaman hias terbaru</p>
                    <div class="social-links mt-3">
                        <a href="{{ 'https://api.whatsapp.com/send/?phone=' . $contacts->phone_number }}"
                            class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                        <a href="{{ $contacts->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="{{ $contacts->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="{{ $contacts->url }}" class="shopee"><i class="bx bx-cart"></i></a>
                        <a href="{{ 'mailto:' . $contacts->email }}" class="gmail"><i class="bx bx-envelope"></i></a>
                        <a href="{{ $contacts->web }}" class="web"><i class="bx bx-globe"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Devliffe Team & Milla Bonsai & Nursery</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>