@extends('layouts.mahasiswa')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="bi bi-person-lines-fill"></i> Profil Mahasiswa</h1>
            <p>Laman untuk mengatur profil mahasiswa</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin_profil', Auth::user()->id) }}">Profil</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-xl-4 mb-3 mt-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gambar Profil</h3>
                </div>
                <form action="{{ route('mahasiswa_update_profil', ['id' => $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="text-center chat-image mb-3">
                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                @if (Auth::user()->profil != 0)
                                    <img class=""
                                        style="width: 300px;  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3); border-radius: 10px; background-size: cover;"
                                        src="{{ asset(Auth::user()->profil) }}">
                                @else
                                    <img class="" style="border: 1px solid #ffffff;"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
                                @endif
                            </div>
                            <hr>
                            <div class="main-chat-msg-name me-4">
                                <h5 class="mb-1 text-dark fw-semibold">{{ Auth::user()->name }}</h5>
                                <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{ Auth::user()->level }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input class="form-control" id="formFile" name="profil" type="file">
                            <small style="color: gray">Disarankan untuk gambar ukuran 3:4 | Maks. 2Mb | png, jpg, jpeg</small>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xl-8 mt-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profil</h3>
                </div>
                <form action="{{ route('mahasiswa_update_profil', ['id' => $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="form-label">Nama</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Email</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ $data->email }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="gender" class="form-control">
                                    <option>{{ $data->gender }}</option>
                                    <option value="Laki-Laki" @if (old('gender') == 'Laki-Laki') selected @endif>
                                        Laki-Laki</option>
                                    <option value="Perempuan" @if (old('gender') == 'Perempuan') selected @endif>
                                        Perempuan</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Jurusan</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                    <option>{{ $data->jurusan }}</option>
                                    <option value="Informatika" @if (old('jurusan') == 'Informatika') selected @endif>
                                        Informatika
                                    </option>
                                    <option value="Teknik Sipil" @if (old('jurusan') == 'Teknik Sipil') selected @endif>Teknik
                                        Sipil
                                    </option>
                                    <option value="Teknik Elektro" @if (old('jurusan') == 'Teknik Elektro') selected @endif>Teknik
                                        Elektro
                                    </option>
                                    <option value="Teknik Mesin" @if (old('jurusan') == 'Teknik Mesin') selected @endif>Teknik
                                        Mesin
                                    </option>
                                    <option value="Arsiterktur" @if (old('jurusan') == 'Arsitektur') selected @endif>Arsitektur
                                    </option>
                                    <option value="Sistem Informasi" @if (old('jurusan') == 'Sistem Informasi') selected @endif>
                                        Sistem
                                        Informasi
                                    </option>
                                </select>
                                @error('jurusan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">NPM</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-lock"></i>
                                </span>
                                <input type="text" name="username" readonly
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ $data->username }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input class="input100 form-control @error('password') is-invalid @enderror"
                                    value="" name="password" type="password">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
