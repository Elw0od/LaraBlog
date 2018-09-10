<!doctype html>
<html lang="fr" class="no-js">
<head>
	<meta charset="utf-8">
	<title>{{ $settings->site_name }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Sault is fully responsive creative agency/freelancer portfolio HTML site template that looks great on any device.">
	<meta name="keywords" content="Sault, HTML5, Template, Design, Development">

	<link rel="shortcut icon" href="../favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400%7CRubik:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/bootstrap.css') }}">
</head>
<body>

@include('includes.header')

	<main id="content" class="white-background">
		<div class="container">
			<div class="row blog-listing no-sidebar">
				<div class="col-12 col-lg-8">
					<article class="post featured has-thumbnail">
						<a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}" class="feature-image-link"><img src="{{ $first_post->featured }}" width="1180" height="680" alt=""></a>
						<div class="post-details">
							<h3><a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}">{{ $first_post->title }}</a></h3>
							<hr>
							<p>{!! substr($first_post->content,0,80) !!}&hellip;</p>
							<a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}" class="read-more">Continuer à lire<i class="saulticon-arrow-forward"></i></a>
						</div>
					</article>
				</div>
				<div class="col-12 col-lg-4">
				<article class="grid-item post has-thumbnail">
							<a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}" class="feature-image-link"><img src="{{ $second_post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}">{{ $second_post->title }}</a></h4>
								<p>{!! substr($second_post->content,0,80) !!}&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">{{ $second_post->category->name }}</a> <a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}" class="read-more">Voir plus <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
				</div>
				<div class="col-12">
					<div class="grid clearfix" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "gutter": ".gutter-sizer", "percentPosition": true, "transitionDuration": "0.3s" }'>
						<article class="grid-item post has-thumbnail">
							<a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}" class="feature-image-link"><img src="{{ $second_post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}">{{ $second_post->title }}</a></h4>
								<p>{!! substr($second_post->content,0,80) !!}&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">{{ $second_post->category->name }}</a> <a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}" class="read-more">Voir plus <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<article class="grid-item post has-thumbnail">
							<a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}" class="feature-image-link"><img src="{{ $third_post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}">{{ $third_post->title }}</a></h4>
								<p>{!! substr($third_post->content,0,80) !!}&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">{{ $third_post->category->name }}</a> <a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}" class="read-more">Voir plus <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<article class="grid-item post has-thumbnail">
							<a href="{{ route('post.single', ['slug' => $fourth_post->slug ]) }}" class="feature-image-link"><img src="{{ $fourth_post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="{{ route('post.single', ['slug' => $fourth_post->slug ]) }}">{{ $fourth_post->title }}</a></h4>
								<p>{!! substr($fourth_post->content,0,80) !!}&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">{{ $fourth_post->category->name }}</a> <a href="{{ route('post.single', ['slug' => $fourth_post->slug ]) }}" class="read-more">Voir plus <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<article class="grid-item post has-thumbnail">
							<a href="post.html" class="feature-image-link"><img src="{{ $fourth_post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="post.html">Creating Mind-bending Illustrations with Sketch and Looper in No Time</a></h4>
								<p>Through this a business can create a system in which they are able to pinpoint behavioral patterns&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">Rory Thompson</a> <a href="post.html" class="read-more">Details <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<article class="grid-item post">
							<div class="post-details">
								<h4><a href="post.html">Prototyping with Real Data - A Framer Tutorial</a></h4>
								<p>To reach the maximum potential of digital marketing firms use social media&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">Rory Thompson</a> <a href="post.html" class="read-more">Details <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<article class="grid-item post has-thumbnail">
							<a href="post.html" class="feature-image-link"><img src="{{ $fourth_post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="post.html">A Product Designer's Guide to Competitive Analysis</a></h4>
								<p>Yet brands must be careful not to be excessive on the use of this type of marketing, as well as solely&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">Mike Spencer</a> <a href="post.html" class="read-more">Details <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<article class="grid-item post has-thumbnail">
							<a href="post.html" class="feature-image-link"><img src="{{ $fourth_post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="post.html">A Rant against Pretty Designs</a></h4>
								<p>Designing past mobile or desktop interaction boundaries and into the&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">Rory Thompson</a> <a href="post.html" class="read-more">Details <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<article class="grid-item post has-thumbnail">
							<a href="post.html" class="feature-image-link"><img src="{{ $fourth_post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="post.html">Design for Emotion to Increase User Engagement</a></h4>
								<p>In the past, storing it would’ve been a problem but new technologies have eased the burden&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">Mike Spencer</a> <a href="post.html" class="read-more">Details <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<article class="grid-item post">
							<div class="post-details">
								<h4><a href="post.html">How to Create Custom Loading Animations to Decrease Bounce Rates</a></h4>
								<p>Data comes in all types of formats, from structured, numeric data in traditional databases&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">Rory Thompson</a> <a href="post.html" class="read-more">Details <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
						<div class="grid-sizer"></div>
						<div class="gutter-sizer"></div>
					</div>
					<p class="text-center">
						<a href="#" class="button white big">Load more posts&hellip;</a>
					</p>
				</div>
			</div>
		</div>
	</main>

@include('includes.footer')

    <script src="{{ asset('app/js/jquery.min.js') }}"></script>
    <script src="{{ asset('app/js/modernizr-custom.min.js') }}"></script>
    <script src="{{ asset('app/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('app/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('app/js/main.js') }}"></script>
</body>
</html>