@extends('layouts.app')

@section('title', 'reserver service')

@section('content')

  <!-- reserver services Section -->
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
                <h2 class="scrub-each-word text-split">Reserver un service</h2>
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
            <div class="inner-column">
              <!-- Contact Form -->
              <div class="contact-form">
                <!--Contact Form-->
                <form method="post" action="get" id="contact-form">
                  <div class="row">

                    <div class="form-group col-lg-12 col-md-12">
                      <label>Votre Nom:</label>
                      <input type="text" name="name" required>
                    </div>

                    <div class="form-group col-lg-6 col-md-6">
                      <label>Votre Email:</label>
                      <input type="email" name="email" required>
                    </div>

                    <div class="form-group col-lg-6 col-md-6">
                      <label>Votre Numero:</label>
                      <input type="tel" name="phone" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <label class="range-title">DIST (Miles):</label>
                      <div class="range-slider-one">
                        <input type="text" class="range-amount" name="field-name" readonly>
                        <div class="distance-range-slider"></div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Type de service:</label>
                      <select class="custom-select">
                        <option value="">Nettoyage Résidentiel</option>
                        <option value="">Nettoyage Commercial</option>
                        <option value="">Aide a la personne</option>
                        <option value="">Services Spécialissés</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Date souhaitée</label>
                      <input type="date" name="date" required>
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
  <!-- End reserver services Section -->
@endsection