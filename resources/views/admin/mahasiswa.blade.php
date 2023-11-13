@extends('layouts.admin')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="app-menu__icon bi bi-people"></i> Manajemen Mahasiswa</h1>
            <p>Laman untuk manajemen data mahasiswa</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="/mahasiswa">Manajemen Mahasiswa</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                            data-bs-target="#modalTambahMahasiswa">
                            Tambah <i class="bi bi-plus-square"></i>
                        </button>

                        @include('admin.includes.mahasiswa.modalTambahMahasiswa')

                        @if (session('sukses'))
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-success">
                                    <button class="btn-close" type="button"
                                        data-bs-dismiss="alert"></button>{{ session('sukses') }}
                                </div>
                            </div>
                        @endif
                        @if (session('failed'))
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-danger">
                                    <button class="btn-close" type="button"
                                        data-bs-dismiss="alert"></button>{{ session('failed') }}
                                </div>
                            </div>
                        @endif
                        <table class="table table-bordered" id="tabelMahasiswa">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $index => $item)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <div class="btn-group fs-5">
                                                    <button type="button" class="btn btn-sm btn-warning"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalEditMahasiswa-{{ $item->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalHapus-{{ $item->id }}">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        @include('admin.includes.mahasiswa.modalHapusMahasiswa')
                                        @include('admin.includes.mahasiswa.modalEditMahasiswa')
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
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
        $('#tabelMahasiswa').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>
    </script>
@endpush
