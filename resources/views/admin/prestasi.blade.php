@extends('layouts.admin')

@section('content')
<div class="app-title">
    <div>
        <h1><i class="icon bi bi-trophy"></i> Manajemen Prestasi</h1>
        <p>Laman untuk manajemen data prestasi</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
        <li class="breadcrumb-item"><a href="/prestasi">Manajemen Prestasi</a></li>
    </ul>
</div>

    <!-- Card Manajamen Prestasi -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        @if ($kejuaraan->count())
                            <a href="{{ route('download') }}" id="pdf" type="button" onclick="myFunction()"
                                class="btn btn-outline-success mb-3" target="blank">Download
                                <i class="bi bi-download"></i>
                            </a>
                        @else
                        @endif
                        @if (session('sukses'))
                            <div class="alert alert-success">
                                {{ session('sukses') }}
                            </div>
                        @endif
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
                                    <th scope="col" class="text-center">Aksi</th>
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
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#modalEditPrestasi-{{ $item->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusPrestasi-{{ $item->id }}">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                {{-- <a href="/edit_prestasi/{{ $item->id }}"><button type="button"
                                                        class="btn btn-warning mr-2">Edit</button></a>
                                                <a href="prestasi/delete/{{ $item->id }}"><button type="button"
                                                        class="btn btn-danger">Hapus</button></a> --}}
                                            </div>
                                        </td>
                                        @include('admin.includes.prestasi.modalHapusPrestasi')
                                        @include('admin.includes.prestasi.modalEditPrestasi')
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Tabel Prestasi-->
    </div>
    <!-- End Card Manajamen Prestasi -->
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
    </script>

    <script>
        function myFunction() {
            document.getElementById("pdf").onclick = open('download').print();
            location.reload();
        }
    </script>
@endpush

