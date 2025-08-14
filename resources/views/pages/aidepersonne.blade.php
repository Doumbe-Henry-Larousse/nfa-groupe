@extends('layouts.AccueilAideP')

@section('title', 'Aide Personne')

@section('content')

<!-- aide a la personne Section -->
<section class="nettoyage-residentiel p-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <!--<span class="sub-title">Our All Services</span>-->
            <h2 class="scrub-each-word text-split">Aide à domicile pour personnes âgées</h2>
        </div>
        <p>
        Parce que chaque aîné mérite de rester chez lui en toute dignité.
        Nos agents sont formés, respectueux, humains et à l’écoute des besoins réels.
        Déroulement en phases :
        </p>
        <div class="sec-nettoyage">
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Premier contact avec la famille ou la personne concernée</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Écoute des besoins particuliers (ménage, lessive, courses, présence rassurante)</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Devis personnalisé + plan d’intervention flexible</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Assignation d’un(e) assistant(e) stable et qualifié(e)</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Interventions hebdomadaires ou ponctuelles, selon horaire défini</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Communication continue avec les proches</Strong></div>
            <div class="text"><i class="fal fa-circle-check"></i><Strong class="text-strong-residentiel">Réévaluation périodique des besoins</Strong></div>

        </div>

        <h2 class="text-h2">Résultat :  Un environnement propre, humain et rassurant.</h2>

		<div class="gallery-area pb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="{{ asset('images\galerie\ap-1.png') }}" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery"
									data-src="{{ asset('images\galerie\ap-1.png') }}"
									href="{{ asset('images\galerie\ap-1.png') }}"><i class="fa fa-search-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="{{ asset('images\galerie\ap-2.png') }}" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery" data-src="{{ asset('images\galerie\ap-2.png') }}"
									href="{{ asset('images\galerie\ap-2.png') }}"><i class="fa fa-search-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="single-gallery mb-30 photo-card">
							<div class="gallery-img">
								<img src="{{ asset('images\galerie\ap-3.png') }}images\galerie\ap-3.png" alt="" />
							</div>
							<div class="gallery-icon">
								<a 
									data-fancybox="gallery" data-src="{{ asset('images\galerie\ap-3.png') }}"
									href="{{ asset('images\galerie\ap-3.png') }}"><i class="fa fa-search-plus"></i>
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
<!-- aide a la personne devis Section -->
@endsection