@extends('front.layout.app')
@section('title', 'Home | Blog')
@section('content')
<article class="blog-post px-3 py-5 p-md-5">
	<div class="container">
		<header class="blog-post-header">
			<h2 class="title mb-2">Why Every Developer Should Have A Blog</h2>
			<div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
		</header>
		
		<div class="blog-post-body">
			<figure class="blog-banner">
				<a href="https://made4dev.com"><img class="img-fluid" src="{{ asset($post->image)}}" alt="{{ $post->title_en }}"></a>
				<figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
			</figure>
			<p>
				{{ $post->desc_en }}
			</p>	
		</div>	
	</div>
</article>
	    
<section class="promo-section theme-bg-light py-5 text-center">
	<div class="container">
		<h2 class="title">Promo Section Heading</h2>
		<p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
		<figure class="promo-figure">
			<a href="https://made4dev.com" target="_blank"><img class="img-fluid" src="{{ asset('assets/images/promo-banner.jpg') }}" alt="image"></a>
		</figure>
	</div>
</section>
@stop