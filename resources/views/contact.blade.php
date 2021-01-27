@extends('template')

@section('content')

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Contact</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Contact</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->


	<!-- Google map -->
	<div class="map" id="map-area">
		<iframe src="{{$map[0]->map}}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>


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
				<div id="contact" class="col-md-6 col-pull">
					<form class="form-class" id="con_form" role="form" action="/email" method="POST">
						@csrf
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
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection