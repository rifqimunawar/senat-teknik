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
                  <h6 class="text-white text-capitalize ps-3">Tambah Data Pengurus</h6>
                </div>
              </div>

              <div class="card-body">
                <form action="{{ route('update.pengurus', $pengurus->id) }}" method="post" enctype="multipart/form-data">
                  @csrf @method('PUT')
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" value="{{ $pengurus->name }}">
                  </div>

                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="{{ $pengurus->jabatan }}">
                  </div>

                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Username Instagram contoh : a_cah899</label>
                    <input type="text" class="form-control" name="username_ig" value="{{ $pengurus->username_ig }}">
                  </div>
                  
                  <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                  <div class="input-group input-group-outline ">
                    <input type="file" class="form-control" name="img" value="{{ $pengurus->img }}">
                  </div>
                  <div class="my-2">
                    <p>Gambar Saat ini</p>
                    <img src="{{ asset('img/'. $pengurus->img) }}" style="width: 150px; height:auto" >
                  </div>
                  <div class="text-center">
                    <a href="{{ route('index.pengurus') }}" class="btn bg-gradient-success w-30 my-4 mb-2">Kembali</a>
                    <button type="sumbit" class="btn bg-gradient-primary w-30 my-4 mb-2">Simpan</button>
                  </div>
                </form>
              </div>

            </div>
        </div>
    </div>
@endsection