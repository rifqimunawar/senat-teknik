@section('title'){{ 'Article' }}@endsection
@section('favicon'){{ asset('img/logo-senat.png') }}@endsection
@extends('masterClient')
@section('content')
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
            </ol>
            <h2>Category {{  }}</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog mt-4 pt-4">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($postLatest as $item)
                    <div class="col-lg-3">
                        <div class="post-img">
                            <img src="{{ asset('img/' . $item->img) }}" class="img-fluid" alt=""
                                style="width: 400px; height: 250px; object-fit: cover">
                        </div>
                        <span class="post-date">
                            <time datetime="{{ $item->created_at->format('Y-m-d') }}">
                                {{ $item->created_at->format('d M, Y') }}
                            </time>
                        </span>
                        <a href="/article-dema-uninus/{{ $item->slug }}">
                            <h3 class="post-title">{{ $item->title }}</h3>
                            <span>Read More</span><i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                @endforeach
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->
@endsection
