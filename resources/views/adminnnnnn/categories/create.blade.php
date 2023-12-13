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
                  <h6 class="text-white text-capitalize ps-3">Tambah Category Post</h6>
                </div>
              </div>

              <div class="card-body">
                <form action="{{ route('store.categoryPost') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Judul Kategory</label>
                    <input type="text" class="form-control" name="title">
                  </div>

                  <div class="text-center">
                    <a href="{{ route('index.categoryPost') }}" class="btn bg-gradient-success w-30 my-4 mb-2">Kembali</a>
                    <button type="sumbit" class="btn bg-gradient-primary w-30 my-4 mb-2">Simpan</button>
                  </div>
                </form>
              </div>

            </div>
        </div>
    </div>
@endsection