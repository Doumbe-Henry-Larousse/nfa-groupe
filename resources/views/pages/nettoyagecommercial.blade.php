@extends('layouts.AccueilServiceC')

@section('title', 'Nettoyage Commercial')

@section('content')

<!-- Nettoyage commercial Section -->

<section class="nettoyage-residentiel p-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <!--<span class="sub-title">Our All Services</span>-->
            <h2 class="scrub-each-word text-split">Nettoyage commercial(bureaux, commerces)</h2>
        </div>
        <p>
        L’image de votre entreprise commence par la propreté de vos locaux.
        Nos services s’adaptent à vos horaires, vos exigences et votre image de marque.
        Déroulement en phases :
        </p>
        <div class="sec-nettoyage">
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Contact initial et visite des lieux (optionnelle)</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Analyse des besoins selon la surface, le type d’activité et les exigences sanitaires</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Soumission claire et détaillée</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Planification des horaires d’intervention (jour, soir, fin de semaine)</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Équipe assignée et formée selon vos critères</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Nettoyage rigoureux et discret</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Rapport de service régulier + ajustements à la demande</Strong></div>

        </div>

        <h2 class="text-h2">Résultat : Des locaux professionnels qui inspirent confiance.</h2>

		<div class="gallery-area pb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="{{ asset('images\galerie\nc-1.png') }}" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery"
									data-src="{{ asset('images\galerie\nc-1.png') }}"
									href="{{ asset('images\galerie\nc-1.png') }}"><i class="fa fa-search-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="{{ asset('images\galerie\nc-2.png') }}" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery" data-src="{{ asset('images\galerie\nc-2.png') }}"
									href="{{ asset('images\galerie\nc-2.png') }}"><i class="fa fa-search-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="{{ asset('images\galerie\nc-3.png') }}" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery" data-src="{{ asset('images\galerie\nc-3.png') }}"
									href="{{ asset('images\galerie\nc-3.png') }}"><i class="fa fa-search-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <a href="{{ route('demander.devis')}}" class="theme-btn btn-style-one"><span class="btn-title">Réserver ce service</span></a>
    </div>    
    
    
</section>
  <!-- End devis Section -->


@endsection