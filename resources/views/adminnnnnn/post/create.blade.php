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
                  <h6 class="text-white text-capitalize ps-3">Tambah Blog Article</h6>
                </div>
              </div>

              <div class="card-body">
                <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="title">
                  </div>


                  <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                  <div class="input-group input-group-outline ">
                    <input type="file" class="form-control" name="img">
                  </div>

                  <label class="form-label my-3">Paragraf Utama</label>
                  <div class="input-group input-group-outline w-12">
                    <textarea id="editor" placeholder="Enter the Description" rows="3" name="content"></textarea>
                  </div>

                  
                                    
                  <label class="form-label my-3">Kategory Postingan</label>
                  <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected disabled>=== Pilih Kategory === </option>
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                  </select>

                  
                  <label class="form-label my-3">Hastag Postingan</label>
                  <div class="form-check">
                    @foreach ($tag as $item)
                    <input class="form-check-input" type="checkbox" 
                    value="{{ $item->id }}" name="tags" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                      {{ $item->title }}
                    </label>
                    @endforeach
                  </div>

                  <label class="form-label my-3">Status Postingan</label>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="status" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Aktifkan Postingan</label>
                  </div>

                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="user_id">
                  </div>

                  <div class="text-center">
                    <a href="{{ route('index.post') }}" class="btn bg-gradient-success w-30 my-4 mb-2">Kembali</a>
                    <button type="sumbit" class="btn bg-gradient-primary w-30 my-4 mb-2">Simpan</button>
                  </div>
                </form>
              </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create( document.querySelector( '#editor' ),{

    })
    .catch( error => {
            
    });
</script>

@endsection 