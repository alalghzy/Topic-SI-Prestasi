<!-- Modal Tambah Mahasiswa -->
<div class="modal fade" id="modalTambahMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    @if (session('sukses'))
                        <div class="alert alert-success">
                            {{ session('sukses') }}
                        </div>
                    @endif

                    <form action="{{ route('daftarkan_mahasiswa') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label class="form-label">Nama</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="Isi dengan nama lengkap">
                                @error('name')
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
                                <select name="jurusan"
                                    class="form-control @error('jurusan') is-invalid @enderror">
                                    <option value="Informatika"
                                        @if (old('jurusan') == 'Informatika') selected @endif>
                                        Informatika
                                    </option>
                                    <option value="Teknik Sipil"
                                        @if (old('jurusan') == 'Teknik Sipil') selected @endif>Teknik
                                        Sipil
                                    </option>
                                    <option value="Teknik Elektro"
                                        @if (old('jurusan') == 'Teknik Elektro') selected @endif>Teknik
                                        Elektro
                                    </option>
                                    <option value="Teknik Mesin"
                                        @if (old('jurusan') == 'Teknik Mesin') selected @endif>Teknik
                                        Mesin
                                    </option>
                                    <option value="Arsiterktur"
                                        @if (old('jurusan') == 'Arsitektur') selected @endif>Arsitektur
                                    </option>
                                    <option value="Sistem Informasi"
                                        @if (old('jurusan') == 'Sistem Informasi') selected @endif>
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
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="gender" class="form-control" required>
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
                            <label class="form-label">Email</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="Isi dengan email yang valid">
                                @error('email')
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
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" placeholder="Isi dengan NPM/NIM yang valid">
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
                                    value="{{ old('password') }}" name="password" type="password" placeholder="Tambahkan password">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal"><i class="bi bi-chevron-left"></i> Kembali</button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i>  Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
