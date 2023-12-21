<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Peserta Mabim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('server/css/pdf-style.css') }}">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Data Peserta Mabim</h5>
        <h6>
            <time datetime="{{ date('Y-m-d H:i:s') }}">
                {{ date('Y-m-d') }} <br>
                {{ date('H:i:s') }}
            </time>
        </h6>
    </center>

    <div class="container">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Prodi/Jurusan</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Ukuran Kaos</th>
                    <th scope="col">Status Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peserta as $item)
                    <tr>
                        <th data-title="No">{{ $loop->iteration }}</th>
                        <th scope="row">{{ $item->name }}</th>
                        <td data-title="Released">{{ $item->nim }}</td>
                        <td data-title="Studio">{{ $item->angkatan }}</td>
                        <td data-title="Worldwide Gross" data-type="currency">{{ $item->prodi }}</td>
                        <td data-title="Domestic Gross" data-type="currency">{{ $item->class }}</td>
                        <td data-title="International Gross" data-type="currency">{{ $item->ukuran_kaos }}</td>
                        <td data-title="Budget" data-type="currency">
                            @if ($item->pembayaran == 'Belum lunas')
                                <p class="btn btn-danger " style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Belum Lunas</p>
                            @else
                                <p class="btn btn-success " style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Sudah Lunas</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>












    {{-- <table class="table table-bordered align-items-center mb-0">
      <thead>
        <tr>
          <th class=" text-center">No</th>
          <th class="">Nama</th>
          <th class=" ps-2">Nim</th>
          <th class=" ps-2">Angkatan</th>
          <th class=" ps-2">Prodi</th>
          <th class=" ps-2">Kelas</th>
          <th class=" ps-2">Size</th>
          <th class=" ps-2">Pembayaran</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($peserta as $item)
        <tr>
          <td class="">{{ $loop->iteration }}</td>
          <td>
            <p class="">{{ $item->name }}</p>
          </td>
          <td>
            <p class="">{{ $item->nim }}</p>
          </td>
          <td>
            <p class="">{{ $item->angkatan }}</p>
          </td>
          <td>
            <p class="">{{ $item->prodi }}</p>
          </td>
          <td>
            <p class="">{{ $item->class }}</p>
          </td>
          <td>
            <p class="">{{ $item->ukuran_kaos }}</p>
          </td>
          <td>
              @if ($item->pembayaran == 'Belum lunas')
              <p class="btn btn-danger">Belum Lunas</p>
            @else
            <p class="btn btn-success">Sudah Lunas</p>
            @endif
          </td>
        </tr>
          @endforeach
      </tbody>
    </table> --}}
</body>

</html>
