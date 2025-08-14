  <!-- Main Footer -->
  <footer class="main-footer footer-style-one" id="footer">
    <!--<div class="bg bg-image" style="background-image: url(images/background/4.jpg);"></div>-->
    
    <!-- Footer Top -->
    <div class="footer-top">
      <div class="auto-container">
        <div class="outer-box">
          <ul class="contact-list-two light">
            <li>
              <i class="icon flaticon-global-shipping-1"></i> 
              <div class="text">Address <br /> <span>Gatineau, Ottawa <br />Canada</span></div>
            </li>
            <li>
              <i class="icon flaticon-stock-1"></i> <div class="text">Contact <br /> <a href="mailto:needhelp@company.com">contactnfagroup@gmail.com</a> <a href="tel:+92880048720">+15144633730</a></div>
            </li>
            <li>
              <i class="icon flaticon-24-hours-2"></i><div class="text">Horaires <br /> <span>Lun - Dim: 24h/24</span></div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Widgets Section -->
    <div class="widgets-section">
      <div class="auto-container">
        <div class="row">

          <!-- Footer Column -->
          <div class="footer-column col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget about-widget">
              <div class="logo"><a href="#"><img src="{{ asset('images/logo-nfa-2.png') }}" alt="Logo"></a></div>
              <div class="text">Pour un quotidien plus simple, un environnement plus propre</div>
              <a href="#apropos" class="theme-btn btn-style-one"><span class="btn-title">A propos</span></a>
            </div>
          </div>

          <!-- Footer COlumn -->
          <div class="footer-column col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget links-widget">
              <h4 class="widget-title">Services</h4>
              <div class="widget-content">
                <ul class="user-links">
                  <li><i class="icon fa fa-angle-double-right"></i>Nettoyage Résidentiel</li>
                  <li><i class="icon fa fa-angle-double-right"></i>Nettoyage commercial</li>
                  <li><i class="icon fa fa-angle-double-right"></i>Aide à la personne</li>
                  <li><i class="icon fa fa-angle-double-right"></i>Services Spécialisés</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Footer COlumn -->
          <div class="footer-column col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget gallery-widget">
              <h4 class="widget-title">Projects</h4>
              <div class="widget-content">
                <div class="insta-gallery">
                  <figure class="image"><a href="#"><img src="images/resource/gallery-thumb-1.jpg" alt="Image"></a></figure>
                  <figure class="image"><a href="#"><img src="images/resource/gallery-thumb-2.jpg" alt="Image"></a></figure>
                  <figure class="image"><a href="#"><img src="images/resource/gallery-thumb-3.jpg" alt="Image"></a></figure>
                  <figure class="image"><a href="#"><img src="images/resource/gallery-thumb-4.jpg" alt="Image"></a></figure>
                  <figure class="image"><a href="#"><img src="images/resource/gallery-thumb-5.jpg" alt="Image"></a></figure>
                  <figure class="image"><a href="#"><img src="images/resource/gallery-thumb-6.jpg" alt="Image"></a></figure>
                </div>
              </div>
            </div>
          </div>

          <!-- Footer COlumn -->
          <div class="footer-column col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget newsletter-widget">
              <h4 class="widget-title">Newsletter</h4>
              <div class="text">Au-delà des frontières, notre aide vous accompagne</div>
              <!-- Newsletter Form -->
              <div class="newsletter-form">
                @if (session('success'))
						      <div class="alert alert-success">
							      {{ session('success') }}
						      </div>
					      @endif
                <div class="form-group">
                  <form action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <input type="text" name="text" placeholder="email....." required value="{{ old('newsletter') }}">
                    <button type="submit" class="form-btn"><i class="fa fa-paper-plane"></i></button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--  Footer Bottom -->
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="inner-container">
          <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
          <div class="copyright-text">© Copyright 2025</div>
          <ul class="social-icon-one light">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--End Main Footer -->