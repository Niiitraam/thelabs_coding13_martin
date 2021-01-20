@extends('template')

@section('content')

	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Blog</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Blog</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
						<img src="{{asset('images/'.$show->image)}}" alt="">
							<div class="post-date">
							<h2>{{$show->date}}</h2>
								
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$show->titre}}</h2>
							<div class="post-meta">
								@foreach($show->articles as $items)
								<a href="">{{$items->tags}}</a>
								@endforeach
								@foreach($show->categories as $item)
								<a href="">{{$item->categorie}}</a>
								@endforeach
								<a href="">2 Comments</a>
							</div>
							<p>{{$show->texte}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset('images/'.$show->image)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$show->auteur}}, <span>Author</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments</h2>
							<ul class="comment-list">
								@foreach($show->comments as $element)
								<li>
									<div class="avatar">
										<img src="{{asset('img/avatar/'.$element->users->photo)}}" alt="">
									</div>
									<div class="commetn-text">
										<h3>
										{{$element->users->prenom}} {{$element->users->name}}
												
											| {{$element->created_at->format('d')}} {{$element->created_at->format('M')}}, {{$element->created_at->format('Y')}} | Reply
										</h3>
										
											<p>{{$element->message}}</p>
										
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
							<form class="form-class" action="/commentaire" method="POST">
								@csrf
								@method('POST')
									<div class="row">
										<div class="col-sm-12">
											<input name="article_id" value="{{$show->id}}" style="display: none" type="text">
											<textarea name="message" placeholder="Message"></textarea>
											<button type="submit" class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach($categorie as $item)
							<li>
								<a href="">{{$item->categorie}}</a>
								</li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							<li><img src="img/instagram/1.jpg" alt=""></li>
							<li><img src="img/instagram/2.jpg" alt=""></li>
							<li><img src="img/instagram/3.jpg" alt=""></li>
							<li><img src="img/instagram/4.jpg" alt=""></li>
							<li><img src="img/instagram/5.jpg" alt=""></li>
							<li><img src="img/instagram/6.jpg" alt=""></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach($tags as $element)
								<li><a href="">{{$element->tags}}</a></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="img/add.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection