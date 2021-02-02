@extends('front.layout.app')
@section('title', 'Home | Blog')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center">
        <h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
        <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
        <form class="signup-form form-inline justify-content-center pt-3">
            <div class="form-group">
                <label class="sr-only" for="semail">Your email</label>
                <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</section>

<section class="blog-list px-3 py-5 p-md-5">
    <div class="container">
        @foreach($post as $posts)
            <div class="item mb-5">
                <div class="media">
                    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ asset($posts->image)}}" alt="{{ $posts->title_en }}">
                    <div class="media-body">
                        <h3 class="title mb-1"><a href="{{ route('post.detail', $posts->id) }}">{{ $posts->title_en }}</a></h3>
                        <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="{{ $posts->title_en }}">8 comments</a></span></div>
                        <div class="intro">{!! $posts->body_en !!}</div>
                        <a class="more-link" href="{{ route('post.detail', $posts->id) }}">Read more &rarr;</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div>
            <div class="pagination-control">{{ $post->links() }}</div>
        </div>
        
        <!-- <div class="item">
            <div class="media">
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ asset('assets/images/blog/blog-post-thumb-6.jpg')}}" alt="image">
                <div class="media-body">
                    <h3 class="title mb-1"><a href="blog-post.html">About Remote Working</a></h3>
                    <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">2 min read</span><span class="comment"><a href="#">1 comment</a></span></div>
                    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
                </div>
            </div>
        </div> -->
        
        <nav class="blog-nav nav nav-justified my-5">
            <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
            <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
        </nav>
        
    </div>
</section>
@stop