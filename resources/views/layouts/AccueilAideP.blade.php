<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="utf-8">
<title>@yield('title', 'Aide à la personne')</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('images/icone-nfagroupe.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/icone-nfagroupe.png') }}" type="image/x-icon">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css"
/>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    /*html { scroll-behavior: smooth; }*/
</style>

</head>
<body>
    <div class="page-wrapper">
        <!-- Preloader -->
    <div class="preloader"><span class="loader"></span></div>
        <!-- Main Header-->
    <header class="main-header header-style-three">
    <!-- Header Top -->
    <div class="header-top">
      <div class="top-left">
        <!-- Info List -->
        <ul class="list-style-one">
          <li><i class="fa fa-map-marker-alt"></i> Gatineau, Québeck</li>
          <li><i class="fa fa-clock"></i> Lun - Dim: 24h/24</li>
          <li><i class="fa fa-phone-volume"></i> <a href="#">+ 1514 463 3730</a></li>
        </ul>
      </div>

      <div class="top-right">
        <ul class="social-icon-one">
          <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
          <!--<li><a href="#"><span class="fab fa-twitter"></span></a></li>-->
          <!--<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>-->
          <li><a href="#"><span class="fab fa-instagram"></span></a></li>
        </ul>
      </div>
    </div>
    <!-- Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
      <!-- Main box -->
      <div class="main-box">
        <div class="logo-box">
          <div class="logo"><a href="index.html"><img src="{{ asset('images/logo-nfa-2.png') }}" alt="" title="Tronis"></a></div>
        </div>

        <!--Nav Box-->
        <div class="nav-outer">
          <div class="nav-outer">
            <nav class="nav main-menu">
              <ul class="navigation">
                <li class="current dropdown">
                  <a href="{{route('home')}}">Accueil</a>
                </li>
                <li class="dropdown">
                  <a href="{{ route('home') }}#apropos">A propos</a>
                </li>
                <li class="dropdown">
                  <a href="{{ route('home') }}#services">Services</a>
                </li>
                <li class="dropdown">
                  <a href="{{ route('home') }}#pourquoichoisir">Pourquoi nous choisir</a>
                </li>
                <li class="dropdown">
                  <a href="{{ route('home') }}#galerie">Galerie</a>
                </li>
                <li class="dropdown">
                  <a href="{{ route('home') }}#contact">Contact</a>
                </li>                   
              </ul>
            </nav>
          </div>
          <!-- Main Menu End-->
        </div>
      </div>
    </div>
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>

      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="upper-box">
          <div class="nav-logo"><a href="index.html"><img src="{{ asset('images/logo-nfa-2.png') }}" alt="" title="Fesho"></a></div>
          <div class="close-btn"><i class="icon fa fa-times"></i></div>
        </div>

        <ul class="navigation clearfix">
          <!--Keep This Empty / Menu will come through Javascript-->
        </ul>
        <ul class="contact-list-one">
          <li>
            <!-- Contact Info Box -->
            <div class="contact-info-box">
              <i class="icon lnr-icon-phone-handset"></i>
              <span class="title">Call Now</span>
              <a href="tel:+92880098670">+92 (8800) - 98670</a>
            </div>
          </li>
          <li>
            <!-- Contact Info Box -->
            <div class="contact-info-box">
              <span class="icon lnr-icon-envelope1"></span>
              <span class="title">Send Email</span>
              <a href="mailto:help@company.com">help@company.com</a>
            </div>
          </li>
          <li>
            <!-- Contact Info Box -->
            <div class="contact-info-box">
              <span class="icon lnr-icon-clock"></span>
              <span class="title">Send Email</span>
              Mon - Sat 8:00 - 6:30, Sunday - CLOSED
            </div>
          </li>
        </ul>


        <ul class="social-links">
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </nav>
    </div><!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
      <span class="search-back-drop"></span>
      <button class="close-search"><span class="fa fa-times"></span></button>

      <div class="search-inner">
        <form method="post" action="index.html">
          <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search..." required="">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container">
        <div class="inner-container">
          <!--Logo-->
          <div class="logo">
            <a href="index.html" title=""><img src="{{ asset('images/logo-nfa-2.png') }}" alt="" title=""></a>
          </div>

          <!--Right Col-->
          <div class="nav-outer">
            <!-- Main Menu -->
            <nav class="main-menu">
              <div class="navbar-collapse show collapse clearfix">
                <ul class="navigation clearfix">
                  <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
              </div>
            </nav>
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
          </div>
        </div>
      </div>
    </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->
    @php
    $page = $page ?? 'default';
    @endphp


    <!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/accueil-aideP.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<ul class="page-breadcrumb">
					<li><a href="{{ route('home')}}">Home</a></li>
					<li>Services</li>
				</ul>
				<h1 class="title">Aide à la Personne</h1>
			</div>
		</div>
	</section>
	<!-- end main-content -->
  </section>

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

<script src="{{ asset('js/jquery.js') }}"></script> 
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/splitType.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/odometer.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<!-- Ajoutez ce script -->

<script>
    $(document).ready(function () {
        $('#contact_form').on('submit', function (e) {
            e.preventDefault(); // Empêche le rechargement

            let form = $(this);
            let formData = form.serialize();

            // Nettoyage des anciens messages
            $('.alert').remove();

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function (response) {
                    form[0].reset(); // Réinitialise le formulaire
                    form.before('<div class="alert alert-success" style="font-weight: bold; font-size: 14px; font-family: Calibri;">Message envoyé avec succès !</div>');
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorList = '<ul>';
                        $.each(errors, function (key, value) {
                            errorList += '<li>' + value[0] + '</li>';
                        });
                        errorList += '</ul>';

                        form.before('<div class="alert alert-danger" style="font-weight: bold; font-size: 14px; font-family: Calibri;">' + errorList + '</div>');
                    } else {
                        form.before('<div class="alert alert-danger" style="font-weight: bold; font-size: 14px; font-family: Calibri;">Une erreur s\'est produite.</div>');
                    }
                }
            });
        });
    });
</script>

<!-- fancybox-->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>

<!-- navigation automatique -->

<script>
    window.addEventListener('scroll', function () {
        const sections = document.querySelectorAll("section[id]");
        const links = document.querySelectorAll(".navigation li a");

        let scrollY = window.pageYOffset;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 100;
            const sectionId = current.getAttribute("id");

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                links.forEach(link => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${sectionId}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    });
</script>


</div><!-- End Page Wrapper -->
</body>
</html>
