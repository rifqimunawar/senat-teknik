@section('title')
    {{ 'Dashboard' }}
@endsection
@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Kotak Aspirasi</h6>
                </div>
              </div>

              <div class="card-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Nama</td>
                      <td>{{ $aspirasi->name }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{ $aspirasi->email }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal</td>
                      <td>{{ $aspirasi->created_at }}</td>
                    </tr>
                    
                  </tbody>
                </table>


                <textarea name="pesan" id="pesan" cols="100" rows="10" class="text-secondary" 
                readonly style="border-radius: 20px"> {{ $aspirasi->pesan }}
                </textarea>

                <div class="text-center">
                  <a href="{{ route('index.aspirasi') }}" class="btn btn-warning">Kembali</a>
                </div>

              </div>

            </div>
        </div>
    </div>
@endsection