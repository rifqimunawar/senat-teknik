@section('title')
    {{ 'About' }}
@endsection
@section('favicon')
    {{ asset('img/logo-senat.png') }}
@endsection
@extends('masterClient')
@section('content')
    <!-- ======= About Section ======= -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about m-5">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Terima Kasih Sudah Melakukan Pemdaftaran</h2>
                <h3>{{ $peserta->name }}, selanjutnya lakukan pembayaran ke 
                  nomor rekening dibawah sebelum tanggal ......</h3>
            </div>
            <div>
              <p>disini isi nomor rekening bendahara........</p>
            </div>

        </div>
    </section><!-- End About Section -->

@endsection
