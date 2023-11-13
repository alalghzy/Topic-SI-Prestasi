@extends('layouts.mahasiswa')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="icon bi bi-trophy"></i> Perolehan Prestasi</h1>
            <p>Laman data perolehan prestasi</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/user"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="/user_prestasi">Perolehan Prestasi</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        @if ($kejuaraan->count())
                            <a href="{{ route('user_download') }}" id="pdf" type="button" onclick="myFunction()"
                                type="button" class="btn btn-outline-success mb-3" target="blank">Download
                                <i class="bi bi-download"></i>
                            </a>
                        @else
                        @endif
                        <!-- Tabel Prestasi -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="tabelPrestasi">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NPM</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Prestasi</th>
                                        <th scope="col">Nama Lomba</th>
                                        <th scope="col">Penyelenggara</th>
                                        <th scope="col">Tingkat</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kejuaraan as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->npm }}</td>
                                            <td>{{ $item->jurusan }}</td>
                                            <td>{{ $item->juara }}</td>
                                            <td>{{ $item->lomba }}</td>
                                            <td>{{ $item->penyelenggara }}</td>
                                            <td>{{ $item->tingkat }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {{-- Datatables --}}
    <script type="text/javascript" src=" {{ asset('admins/js/plugins/jquery.dataTables.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $('#tabelPrestasi').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>

    <script>
        function myFunction() {
            document.getElementById("pdf").onclick = open('download').print();
            location.reload();
        }
    </script>
@endpush
