@extends('layouts.frontend')

@section('content')
<body>

<main id="content" class="white-background">
		<div class="container">
			<div class="row blog-listing no-sidebar">
				<div class="col-12">
					<div class="grid clearfix" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "gutter": ".gutter-sizer", "percentPosition": true, "transitionDuration": "0.3s" }'>
                              @foreach($category->posts as $post)
						<article class="grid-item post has-thumbnail">
							<a href="{{ route('post.single', ['slug' => $post->slug ]) }}" class="feature-image-link"><img src="{{ $post->featured }}" width="730" height="500" alt=""></a>
							<div class="post-details">
								<h4><a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a></h4>
								<p>{!! substr($post->content,0,80) !!}&hellip;</p>
								<p class="meta clearfix"><a href="#" class="author-link">{{ $post->category->name }}</a> <a href="{{ route('post.single', ['slug' => $post->slug ]) }}" class="read-more">Voir plus <i class="saulticon-arrow-forward"></i></a></p>
							</div>
						</article>
                              @endforeach
                              </div>
                        </div>
                  </div>
            </div>
</main>
</body>


@endsection