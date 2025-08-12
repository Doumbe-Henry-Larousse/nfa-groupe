@php
    $page = $page ?? 'default';
@endphp


<!-- Banner Section -->
  <section class="banner-section">
    <!--<div class="icon-car"></div>-->

      {{-- Carousel complet de la page d’accueil --}}
      <div class="banner-carousel owl-carousel owl-theme">

      <!-- Slide Item -->
      <div class="slide-item">
        <div class="bg bg-image" style="background-image: url(images/banner/accueil-1.jpg);"></div>
        <!--<div class="bg-shape"></div>-->
        <div class="auto-container">
          <div class="content-box">
            <h1 class="title animate-1">Bienvenu chez <br />Nettoyage et Aide NFA Groupe,</h1>
            <div class="text animate-2">votre partenaire de confiance pour tous vos besoins en nettoyage, aide à la personne <br />logistique de déménagement et soutien domestique à Gatineau et ses environs.</div>
            <div class="btn-box animate-3">
              <a href="{{ route('demander.devis')}}" class="theme-btn btn-style-one"><span class="btn-title">Demander un Devis</span></a>
              <a href="#contact" class="theme-btn btn-style-one"><span class="btn-title">Nous contacter</span></a>
              <!--<a href="{{ route('reserverservice')}}" class="theme-btn btn-style-one"><span class="btn-title">Réserver un service</span></a>-->
            </div>
          </div>
        </div>
      </div>

      <!-- Slide Item -->
      <div class="slide-item">
        <div class="bg bg-image" style="background-image: url(images/banner/accueil-3.jpg);"></div>
        <!--<div class="bg-shape"></div>-->
        <div class="auto-container">
          <div class="content-box">
            <h1 class="title animate-1">Faites nous confiance</h1>
            <div class="text animate-2">pour des services efficaces, humains et personnalisés. <br />Slogan : « Pour un quotidien plus simple, un environnement plus propre »</div>
            <div class="btn-box animate-3">
              <a href="{{ route('demander.devis')}}" class="theme-btn btn-style-one"><span class="btn-title">Demander un devis</span></a>
              <a href="#contact" class="theme-btn btn-style-one"><span class="btn-title">Nous contacter</span></a>
              <!--<a href="{{ route('reserverservice')}}" class="theme-btn btn-style-one"><span class="btn-title">Réserver un service</span></a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      {{-- Bannière simple pour les autres pages --}}
    <!--<section class="banner-section" style="background-image: url('{{ asset('images/banner/accueil-3.jpg') }}'); background-size: cover;">
        <div class="auto-container">
            <div class="content-box">
                <div class="bread-crumb">
                    <a href="{{ url('layouts.base') }}">Accueil</a> &gt; <span>{{ $titre ?? 'Page' }}</span>
                </div>
                <h1 class="banner-title">{{ $titre ?? 'Page' }}</h1>
            </div>
        </div>
    </section>-->

  <!-- End Banner Section -->