@extends('template')

@section('content')
	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="img/big-logo.png" alt="">
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="img/01.jpg"></div>
			<div class="item  hero-item" data-bg="img/02.jpg"></div>
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach($service as $element)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$element->icone}}"></i>
							</div>
							<h2> {{$element->titre_service}}</h2>
							<p>{{$element->texte_service}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->

		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$titre[0]->titre}}</h2>
				</div>	
				<div class="row">
					<div class="col-md-6">
					<p>{{$presentation[0]->text1}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$presentation[0]->text2}}</p>
					</div>
				</div>
				<div class="text-center mt60">
				<a href="/contact" class="site-btn">{{$button[0]->btntext}}</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
								<a href="{{$video[0]->lien}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{{$titre[1]->titre}}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach($temoignage as $element)
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$element->temoignage}}</p>
							<div class="client-info">
								<div class="avatar">
								<img src="{{asset('img/instagram/'.$element->photo)}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$element->prenom}} {{$element->nom}}</h2>
									<p>{{$element->fonction}}</p>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{{$titre[2]->titre}}</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach($servicesAll as $element)
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$element->icone}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$element->titre_service}}</h2>
							<p>{{$element->texte_service}}</p>
						</div>
					</div>
				</div>
				@endforeach
				<!-- single service -->
				
			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
			<h2>{{$titre[3]->titre}}</h2>
			</div>
			<div class="row">
				<!-- single member -->
				@foreach($team as $element)
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/'.$element->photo)}}" alt="">
						<h2>{{$element->prenom}} {{$element->nom}}</h2>
						<h3>{{$element->fonction}}</h3>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>{{$titre[4]->titre}}</h2>
					<p>{{$titre[5]->titre}}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="" class="site-btn btn-2">{{$button[1]->btntext}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
					<h2>{{$titre[6]->titre}}</h2>
					</div>
					<p> {{$contact[0]->text}} </p>
				<h3 class="mt60"> {{$titre[7]->titre}}</h3>
					<p class="con-item"> {{$contact[0]->rue}} <br> {{$contact[0]->ville}} </p>
					<p class="con-item">{{$contact[0]->numero}}</p>
					<p class="con-item">{{$contact[0]->email}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
							<button class="site-btn">{{$button[2]->btntext}}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->
@endsection
