<!-- Modal Edit Prestasi -->
<div class="modal fade" id="modalEditPrestasi-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Prestasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <form class="row g-3" action="/update_prestasi/{{ $item->id }}" method="POST">
                        @csrf
                        <div class="col-md-6 mb-1">
                            <label class="form-label">Nama</label>
                            <input readonly disabled type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $item->name) }}">
                                <input hidden type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $item->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-1">
                            <label class="form-label">NPM</label>
                            <input disabled readonly type="text" name="npm" class="form-control @error('npm') is-invalid @enderror"
                            value="{{ old('npm', $item->npm) }}">
                            <input hidden type="text" name="npm" class="form-control @error('npm') is-invalid @enderror"
                            value="{{ old('npm', $item->npm) }}">
                            @error('npm')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Jurusan</label>
                            </div>
                            <select disabled name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                <option value="{{ old('jurusan', $item->jurusan) }}"> {{ old('jurusan', $item->jurusan) }}</option>
                                <option value="Informatika" @if (old('jurusan') == 'Informatika') selected @endif>
                                    Informatika</option>
                                <option value="Teknik Sipil" @if (old('jurusan') == 'Teknik Sipil') selected @endif>
                                    Teknik Sipil</option>
                                <option value="Teknik Elektro" @if (old('jurusan') == 'Teknik Elektro') selected @endif>
                                    Teknik Elektro</option>
                                <option value="Teknik Mesin" @if (old('jurusan') == 'Teknik Mesin') selected @endif>
                                    Teknik Mesin</option>
                                <option value="Arsiterktur" @if (old('jurusan') == 'Arsitektur') selected @endif>
                                    Arsitektur</option>
                                <option value="Sistem Informasi" @if (old('jurusan') == 'Sistem Informasi') selected @endif>
                                    Sistem Informasi</option>
                            </select>

                            <select hidden name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                <option value="{{ old('jurusan', $item->jurusan) }}"> {{ old('jurusan', $item->jurusan) }}</option>
                                <option value="Informatika" @if (old('jurusan') == 'Informatika') selected @endif>
                                    Informatika</option>
                                <option value="Teknik Sipil" @if (old('jurusan') == 'Teknik Sipil') selected @endif>
                                    Teknik Sipil</option>
                                <option value="Teknik Elektro" @if (old('jurusan') == 'Teknik Elektro') selected @endif>
                                    Teknik Elektro</option>
                                <option value="Teknik Mesin" @if (old('jurusan') == 'Teknik Mesin') selected @endif>
                                    Teknik Mesin</option>
                                <option value="Arsiterktur" @if (old('jurusan') == 'Arsitektur') selected @endif>
                                    Arsitektur</option>
                                <option value="Sistem Informasi" @if (old('jurusan') == 'Sistem Informasi') selected @endif>
                                    Sistem Informasi</option>
                            </select>
                            @error('jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Lomba</label>
                            <input type="text" name="lomba"
                                class="form-control  @error('lomba') is-invalid @enderror" value="{{ old('lomba', $item->lomba) }}">
                            @error('lomba')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12 mb-1">
                            <label class="form-label">Perolehan Prestasi</label>
                            <input type="text" name="juara"
                                class="form-control  @error('juara') is-invalid @enderror" value="{{ old('juara', $item->juara) }}">
                            @error('juara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group col-8 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Tingkatan</label>
                            </div>
                            <select class="form-control @error('tingkat') is-invalid @enderror" name="tingkat">
                                <option value="{{ old('tingkat', $item->tingkat) }}">{{ old('tingkat', $item->tingkat) }}</option>
                                <option value="Desa/Lurah" @if (old('tingkat') == 'Desa/Lurah') selected @endif>
                                    Desa/Lurah</option>
                                <option value="Kecamatan" @if (old('tingkat') == 'Kecamatan') selected @endif>
                                    Kecamatan</option>
                                <option value="Kota/Kabupaten" @if (old('tingkat') == 'Kota/Kabupaten') selected @endif>
                                    Kota/Kabupaten</option>
                                <option value="Provinsi" @if (old('tingkat') == 'Provinsi') selected @endif>Provinsi
                                </option>
                                <option value="Nasional" @if (old('tingkat') == 'Nasional') selected @endif>
                                    Nasional</option>
                                <option value="Internasional" @if (old('tingkat') == 'Internasional') selected @endif>
                                    Internasional</option>
                            </select>
                            @error('tingkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-8">
                            <label class="form-label">Penyelenggara</label>
                            <input type="text" name="penyelenggara"
                                class="form-control @error('penyelenggara') is-invalid @enderror"
                                value="{{ old('penyelenggara', $item->penyelenggara) }}">
                            @error('penyelenggara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <label for="date" class="form-label">Tanggal</label>
                            <input class="form-control @error('date') is-invalid @enderror" type="date"
                                name="date" value="{{ $item->tanggal }}" id="date">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                    class="bi bi-chevron-left"></i> Kembali</button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i> Simpan</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
