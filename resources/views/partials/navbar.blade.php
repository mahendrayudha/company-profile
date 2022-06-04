<section id="topbar" class="d-flex align-items-center">
	<div class="container d-flex justify-content-center justify-content-md-between">
		<div class="contact-info d-flex align-items-center">
			<i class="bi bi-globe d-flex align-items-center">
				<a href="{{ $contacts->web }}" target="_blank">{{ $contacts->web }}</a>
			</i>
			<i class="bi bi-whatsapp d-flex align-items-center ms-4">
				<a href="{{ 'https://api.whatsapp.com/send/?phone=' . $contacts->phone_number }}">
					<span>{{ '+' . $contacts->phone_number }}</span>
				</a>
			</i>
		</div>
		<div class="social-links d-none d-md-flex align-items-center">
			<a href="{{ $contacts->facebook }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
			<a href="{{ $contacts->instagram }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
			<a href="{{ $contacts->url }}" target="_blank" class="cart"><i class="bi bi-cart"></i></a>
			<a href="{{ $contacts->email }}" target="_blank" class="cart"><i class="bi bi-envelope"></i></a>
		</div>
	</div>
</section>

<header id="header" class="d-flex align-items-center">
	<div class="container d-flex align-items-center justify-content-between">
		<a href="index.html" class="logo"><img src="{{ asset('landingpage/img/logo/logo.png') }}"
				alt="Milla Bonsai & Nursery"></a>
		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
				<li><a class="nav-link scrollto" href="#about">Profil</a></li>
				<li><a class="nav-link scrollto " href="#product">Produk</a></li>
				<li><a class="nav-link scrollto" href="#team">Tim Pengembang</a></li>
				<li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
	</div>
</header>