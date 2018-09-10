@extends('layouts.frontend')

@section('content')

<body class="single">

     <main id="content" class="white-background">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="post-featured-image">
						<img src="{{ $post->featured }}" width="1180" height="680" alt="">
					</div>
				</div>
				<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
					<article class="post has-thumbnail">
						<div class="post-header">
							<h2>{{ $post->title }}</h2>
							<p class="meta-info">
								<span class="post-author">Posté Par<a href="#"> Rory Thompson</a></span>
								<span class="post-date">{{ $post->created_at->toFormattedDateString() }}</span>
							</p>
						</div>
						<div class="post-content">
                                    <p>{!! $post->content !!}</p>
						</div>
					</article>

					<div class="row post-footer">
						<div id="share-post" class="col-md-6">
							<h5>Share this:</h5>
							<p>
                            <div class="socials text-center">
                                    <div class="addthis_inline_share_toolbox_gjor"></div>
                              </div>
							</p>
						</div>
						<div class="col-md-6">
							<p class="tags">
								<strong class="sr-only">Tagged:</strong>
                                @foreach($post->tags as $tag)
                                    <a href="#">{{ $tag->tag }}</a>
                                @endforeach
							</p>
						</div>
						<div class="col-12">
							<div class="sep"></div>
						</div>
						<div class="other-posts col-12 extra-margin-bottom">
							<h5>Recommended reads</h5>
							<div class="owl-carousel owl-thumbs-2">
                            @if($prev)
								<div class="thumb">
									<a href="{{ route('post.single', ['slug' => $prev->slug ]) }}">
										<img src="{{ $prev->featured }}" width="730" height="500" alt="">
										<span class="info"><span class="overlay"></span><span class="text">{{ $prev->title }}</span><i class="saulticon-arrow-forward"></i></span>
									</a>
								</div>
                                @endif
                            @if($next)
								<div class="thumb">
									<a href="{{ route('post.single', ['slug' => $next->slug ]) }}">
										<img src="{{ $next->featured }}" width="730" height="500" alt="">
										<span class="info"><span class="overlay"></span><span class="text">{{ $next->title }}</span><i class="saulticon-arrow-forward"></i></span>
									</a>
								</div>
                                @endif
							</div>
						</div>
						<div class="author-info col-12 extra-margin-bottom">
							<h5>About the author</h5>
							<div class="author-avatar">
								<img src="{{ asset($post->user->profile->avatar) }}" width="140" height="140" alt="">
							</div>
							<h4><a href="#">{{ $post->user->name }}</a></h4>
							<p class="social-links">
								<a href="{{ $post->user->profile->facebook }}" class="social-link saulticon">facebook</a>
								<a href="#" class="social-link saulticon">twitter</a>
								<a href="#" class="social-link saulticon">dribbble</a>
							</p>
							<div class="author-description">{{ $post->user->profile->about }}</div>
						</div>

						<div class="col-12">
                                    @include('includes.disqus')
						</div>

					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</main>
      </body>
      


@endsection

</html>