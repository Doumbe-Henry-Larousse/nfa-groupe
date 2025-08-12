@extends('layouts.AccueilServiceR')

@section('title', 'Nettoyage Residentiel')

@section('content')

<!-- nettoyage residentiel Section -->
<section class="nettoyage-residentiel p-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <!--<span class="sub-title">Our All Services</span>-->
            <h2 class="scrub-each-word text-split">Nettoyage résidentiel</h2>
        </div>
        <p>
            Offrez à votre maison un souffle de fraîcheur.
            Chez NFA Groupe, nous transformons votre espace en un lieu propre, sain et apaisant — sans stress, sans tracas.
            Déroulement en phases :
        </p>
        <div class="sec-nettoyage">
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Prise de contact (formulaire ou appel)</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Évaluation rapide de vos besoins (type d’habitation, fréquence, zones à prioriser)</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Envoi d’un devis personnalisé</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Prise de rendez-vous selon votre horaire</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Intervention professionnelle : nettoyage en profondeur avec produits sécuritaires</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Contrôle qualité + ajustements si nécessaires</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Suivi après service (par courriel ou téléphone)</Strong></div>

        </div>

        <h2 class="text-h2">Résultat : Des locaux professionnels qui inspirent confiance.</h2>

		<div class="gallery-area pb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="images\galerie\nr-1.png" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery"
									data-src="images\galerie\nr-1.png"
									href="images\galerie\nr-1.png"><i class="fa fa-search-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="images\galerie\nr-2.png" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery" data-src="images\galerie\nr-2.png"
									href="images\galerie\nr-2.png"><i class="fa fa-search-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="images\galerie\nr-3.png" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery" data-src="images\galerie\nr-3.png"
									href="images\galerie\nr-3.png"><i class="fa fa-search-plus"></i>
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
