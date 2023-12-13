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
                  <h6 class="text-white text-capitalize ps-3">Pengurus Table</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <a href="{{ route('create.pengurus') }}" class="badge badge-sm bg-gradient-success m-4" >Tambah</a>
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Images</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pengurus as $item)
                      <tr>
                        <td class="d-flex justify-content-center">{{ $loop->iteration }}</td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="{{ asset('img/'.$item->img) }}" class="avatar avatar-sm me-3 border-radius-lg" style="object-fit: cover">
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $item->name }}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $item->jabatan }}</p>
                        </td>
        
                        <td class="align-middle text-center text-sm">
                          
                          <form action="{{ route('pengurus.destroy', $item->id) }}" method="POST">
                          <a href="/admin/pengurus/edit/{{ $item->id }}" class="badge badge-sm bg-gradient-warning" >Edit</a>
                            @csrf
                            @method('DELETE')
                              <button type="submit" class="badge badge-sm bg-gradient-danger" 
                              onclick="return confirm
                            ('Apakah Anda yakin ingin menghapus pengurus ini?')">Hapus</button>
                          </form>

                        </td>
                      </tr>
                        @endforeach
        
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection