@section('title')
    {{ 'Dashboard' }}
@endsection
@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
              <div class="card-body">
                <form action="{{ route('store.home') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  
                  <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                  <div class="input-group input-group-outline ">
                    <input type="file" class="form-control" name="img">
                  </div>
                  {{-- <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                  </div> --}}
                  <div class="text-center">
                    <a href="{{ route('index.home') }}" class="btn bg-gradient-success w-30 my-4 mb-2">Kembali</a>
                    <button type="sumbit" class="btn bg-gradient-primary w-30 my-4 mb-2">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
@endsection



