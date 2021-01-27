@extends('template')

@section('content')

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="/home-site">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{{$titre[8]->titre}}</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach($datas as $element)
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
						<i class=" {{$element->icon}}"></i>
						</div>
						<div class="service-text">
						<h2> {{$element->titre_service}}</h2>
						<p> {{$element->texte_service}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="text-center">
				<a href="#icon" class="site-btn">{{$button[3]->btntext}}</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- features section -->
	<div class="team-section spad" id="icon">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$titre[9]->titre}}</h2>
			</div>
			<div class="">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach($data as $element)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$element->titre_service}}</h2>
							<p>{{$element->texte_service}}</p>
						</div>
						<div class="icon">
							<i class="flaticon-002-caliper"></i>
						</div>
					</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach($data as $element)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$element->titre_service}}</h2>
							<p>{{$element->texte_service}}</p>
						</div>
						<div class="icon">
							<i class="flaticon-002-caliper"></i>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="text-center mt100">
				<a href="#article" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad" id="article">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach($data as $element)
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{asset('img/'.$element->image)}}" style="width: 300px">
						</div>
						<div class="card-text">
						<h2>{{$element->titre_service}}</h2>
						<p>{{$element->texte_service}}</p>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
	<!-- services card section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" role="form" action="/newsletter" method="POST">
						@csrf
						<input type="text" name="email" placeholder="Your e-mail here">
						<button type="submit" class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


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