<!--Contact Details Start-->
	<section class="contact-details" id="contact">
		<div class="container">
			<div class="row">
        <div class="sec-title text-center">
          <!--<span class="sub-title">Our All Services</span>-->
          <h2 class="scrub-each-word text-split">Contact</h2>
        </div>
				<div class="col-xl-7 col-lg-6">
					<!--<div class="sec-title">
						<span class="sub-title">Envoyez-nous un email</span>
						<h2>N'hésitez pas à écrire</h2>
					</div>-->
					@if (session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
					@endif
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="{{ route('contact.submit') }}" method="POST">
						@csrf

						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="name" id="name" class="form-control" type="text" required placeholder="Votre Nom" value="{{ old('name') }}">
									@error('name') 
										<span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="email" id="email" class="form-control" type="email" required placeholder="Votre Email" value="{{ old('email') }}">
									@error('email') 
										<span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
									@enderror
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="subject" id="subject" class="form-control" type="text" required placeholder="Votre Sujet" value="{{ old('subject') }}">
									@error('subject') 
										<span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="phone" id="phone" class="form-control" type="text" required placeholder="Votre Numero" value="{{ old('phone') }}">
									@error('phone') 
										<span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
									@enderror
								</div>
							</div>
						</div>

						<div class="mb-3">
							<textarea name="message" id="message" class="form-control" rows="7" required placeholder="Votre message">{{ old('message') }}</textarea>
							@error('message') 
								<span class="error" style="color: red; font-size: 20px; font-family: Calibri;">{{ $message }}</span>
							@enderror
						</div>

						<div class="mb-5">
							<!--<input name="form_botcheck" class="form-control" type="hidden" value="" />-->
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait...">
								<span class="btn-title">Valider</span>
							</button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">n'hésitez pas a nous contacter</span>
							<!--<h2>n'hésitez pas a nous contacter</h2>
							<div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>-->
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Avez-Vous des questions ?</h6>
									<a href="#">+ 1514 463 3730</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Email</h6>
									<a href="#">contactnfagroup@gmail.com</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Visitez a tout moment</h6>
									<span>Gatineau, Ottawa. Canada</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</section>
<!--Contact Details End-->