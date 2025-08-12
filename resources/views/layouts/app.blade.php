<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="utf-8">
<title>@yield('title', 'nfa groupe')</title>
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
    @include('layouts.header')
    @include('layouts.banner')

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
