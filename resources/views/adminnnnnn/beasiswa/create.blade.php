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
                  <h6 class="text-white text-capitalize ps-3">Tambah Info Beasiswa</h6>
                </div>
              </div>

              <div class="card-body">
                <form action="{{ route('store.beasiswa') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Nama Beasiswa</label>
                    <input type="text" class="form-control" name="title">
                  </div>

                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Link Beasiswa</label>
                    <input type="text" class="form-control" name="link">
                  </div>

                  <label class="form-label mt-3">Deskripsi Beasiswa</label>
                  <div class="input-group input-group-outline mb-3">
                    <textarea name="description" id="description" cols="100" rows="8"></textarea>
                  </div>

                  <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                  <div class="input-group input-group-outline ">
                    <input type="file" class="form-control" name="img">
                  </div>
                  <div class="text-center">
                    <a href="{{ route('index.beasiswa') }}" class="btn bg-gradient-success w-30 my-4 mb-2">Kembali</a>
                    <button type="sumbit" class="btn bg-gradient-primary w-30 my-4 mb-2">Simpan</button>
                  </div>
                </form>
              </div>

            </div>
        </div>
    </div>
@endsection