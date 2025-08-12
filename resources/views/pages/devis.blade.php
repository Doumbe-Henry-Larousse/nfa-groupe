@extends('layouts.AccueilDemandeDevis')

@section('title', 'Démander un devis')

@section('content')

  <!-- devis Section -->
  <section class="contact-section p-0" id="devis">
    <!--<div class="icon-container"></div>-->
    <div class="auto-container">
      <div class="outer-box">
        <div class="row g-0">

          <!-- Content Column -->
          <div class="content-column col-lg-6 col-md-12 col-sm-12 order-lg-2 wow fadeInRight">
            <div class="inner-column">
              <!--<div class="icon-arrow"></div>-->
              <div class="sec-title">
                <!--<span class="sub-title">Demander un Devis</span>-->
                <h2 class="scrub-each-word text-split">Demander un Devis</h2>
                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt labore dolore magna aliquaenim ad minim.</div>
              </div>
              <div class="row">

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-4 col-sm-4">
                  <div class="inner-box">
                    <i class="icon fa fa-check"></i>
                    <div class="content">
                      <h5 class="title">Tracking <br />made easy</h5>
                    </div>
                  </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-4 col-sm-4">
                  <div class="inner-box">
                    <i class="icon fa fa-check"></i>
                    <div class="content">
                      <h5 class="title">Multiple <br /> warehouses</h5>
                    </div>
                  </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-4 col-sm-4">
                  <div class="inner-box">
                    <i class="icon fa fa-check"></i>
                    <div class="content">
                      <h5 class="title">Quick <br />fast process</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Form Column -->
          <div class="form-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms">  
          @if (session('success'))
						<div class="alert alert-success center">
							{{ session('success') }}
						</div>
					@endif
          <div class="inner-column">
              <!-- Contact Form -->
              <div class="contact-form">
                <!--Contact Form-->
                <form method="post" action="{{ route('devis.submit') }}" id="contact-form">
                  @csrf
                  <div class="row">

                    <div class="form-group col-lg-6 col-md-6">
                      <label>Votre Nom:</label>
                      <input type="text" name="name" id="name" required value="{{ old('name') }}">
                      @error('name') 
										    <span class="error" style="color: red; font-size: 15px; font-family: Calibri;">{{ $message }}</span>
									    @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-6">
                      <label>Votre Code Postal:</label>
                      <input type="text" name="code" id="code" required value="{{ old('code') }}">
                      @error('name') 
										    <span class="error" style="color: red; font-size: 15px; font-family: Calibri;">{{ $message }}</span>
									    @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-6">
                      <label>Votre Email:</label>
                      <input type="email" id="email" name="email" required value="{{ old('email') }}">
                        @error('email') 
										      <span class="error" style="color: red; font-size: 15px; font-family: Calibri;">{{ $message }}</span>
									      @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-6">
                      <label>Votre Numero:</label>
                      <input type="phone" name="phone" id="phone" required value="{{ old('phone') }}">
                        @error('phone') 
										      <span class="error" style="color: red; font-size: 15px; font-family: Calibri;">{{ $message }}</span>
									      @enderror
                    </div>

                    <!--<div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <label class="range-title">DIST (Miles):</label>
                      <div class="range-slider-one">
                        <input type="text" class="range-amount" name="field-name" readonly>
                        <div class="distance-range-slider"></div>
                      </div>
                    </div>-->

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Type de service:</label>
                      <select class="custom-select" required name="type_service" id="type_service">
                        <option value="" disabled selected>Sélectionnez un service</option>
                        <option value="Nettoyage_Résidentiel" {{ old('type_service') == 'Nettoyage_Résidentiel' ? 'selected' : '' }}>Nettoyage Résidentiel</option>
                        <option value="Nettoyage_Commercial" {{ old('type_service') == 'Nettoyage_Commercial' ? 'selected' : '' }}>Nettoyage Commercial</option>
                        <option value="Aide_personne" {{ old('type_service') == 'Aide_personne' ? 'selected' : '' }}>Aide a la personne</option>
                        <option value="Services_Spécialissés" {{ old('type_service') == 'Services_Spécialissés' ? 'selected' : '' }}>Services Spécialissés</option>
                      </select>
                        @error('type_service') 
										      <span class="error" style="color: red; font-size: 15px; font-family: Calibri;">{{ $message }}</span>
									      @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Date souhaitée</label>
                      <input type="date" name="date" id="date" required value="{{ old('date') }}">
                      	@error('date') 
										      <span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
									      @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Heure souhaitée</label>
                      <input type="time" name="heure" id="date" required value="{{ old('heure') }}">
                      	@error('date') 
										      <span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
									      @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Moyen de paiement</label>
                      <input type="text" name="paiement" id="date" required value="{{ old('paiement') }}">
                      	@error('date') 
										      <span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
									      @enderror
                    </div>
                  
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label>Détail de service</label>
                      <input type="text" name="detail" id="detail" required value="{{ old('detail') }}">
                      	@error('date') 
										      <span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
									      @enderror
                    </div>


                    <div class="form-group col-lg-12">
                      <button type="submit" class="theme-btn btn-style-one bg-dark" name="submit-form"><span class="btn-title">Soumettre la demande</span></button>
                    </div>
                  </div>
                </form>
              </div>
              <!--End Contact Form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End devis Section -->
@endsection
