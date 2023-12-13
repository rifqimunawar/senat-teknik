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
                  <h6 class="text-white text-capitalize ps-3">Info Beasiswa</h6>
                </div>
              </div>

              <div class="card-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Nama Beasiswa</td>
                      <td>{{ $beasiswa->title }}</td>
                    </tr>
                    <tr>
                      <td>Link Pendaftaran</td>
                      <td><a href="{{ $beasiswa->link }}" class="badge badge-sm bg-gradient-info">Daftar</a></td>
                    </tr>
                    

                  </tbody>
                </table>

                <label class="form-label mt-3">Deskripsi Beasiswa</label>
                <div class="input-group input-group-outline mb-3">
                  <textarea name="description" id="description" 
                  class="border-0 text-secondary" cols="100" rows="8" readonly>{{ $beasiswa->description }}</textarea>
                </div>

                <div class="text-center">
                  <a href="{{ route('index.beasiswa') }}" class="btn bg-gradient-success w-30 my-4 mb-2">Kembali</a>
                </div>
              </div>

            </div>
        </div>
    </div>
@endsection