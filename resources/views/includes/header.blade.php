<header id="top" class="navbar">
		<div class="container">
			<div class="inner">

				<div class="site-title">
					<h1>
						<a href="/">
							{{ $settings->site_name }}
						</a>
					</h1>
					<a href="#site-menu" class="site-menu-toggle">
						<span class="sr-only">Toggle navigation</span>
					</a>
				</div>

				<div id="site-menu">
					<nav>
						<ul>
                        @foreach($categories as $category)
                              <li >
                                    <a href="{{ route('category.single', ['id' => $category->id ]) }}">{{ $category->name }}</a>
                              </li>
                            @endforeach

							@include('includes.search')
						</ul>
					</nav>
				</div>

			</div>
		</div>
	</header>
