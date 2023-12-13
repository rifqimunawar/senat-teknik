@section('title'){{ 'Home' }}@endsection
@section('favicon'){{ asset('img/dema.png') }}@endsection
@extends('masterClient')
@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-4">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Who We Are</h3>
                        <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti
                            reprehenderit.</h2>
                        <p>
                            Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor
                            consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est
                            corrupti.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#"
                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/dema pelantikan.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Team</h2>
                <p>Pengurus</p>
            </header>

            <div class="row gy-4">

              @foreach ($pengurusData as $item)
                  
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/'. $item->img) }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://www.instagram.com/{{ $item->username_ig }}"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.instagram.com/{{ $item->username_ig }}"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/{{ $item->username_ig }}"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.instagram.com/{{ $item->username_ig }}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $item->name }}</h4>
                            <span>{{ $item->jabatan }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>

    </section><!-- End Team Section -->
@endsection
