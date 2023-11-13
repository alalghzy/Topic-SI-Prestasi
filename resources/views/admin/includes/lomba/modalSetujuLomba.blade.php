<!-- Modal Lihat Lomba-->
<div class="modal fade" id="modalSetujuLomba-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Perolehan Prestasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($item->status == 'Disetujui')
<button class="btn btn-warning">
    Data sudah dikonfirmasi!
</button>
                @else
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="row g-3"
                                            action="{{ route('konfirmasi_lomba', ['id' => $item->id]) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="namelomba">Perolehan Prestasi</label>
                                                <div class="wrap-input100 validate-input input-group">
                                                    <span class="input-group-text bg-white text-muted">
                                                        <i class="icon bi bi-trophy"></i>
                                                    </span>
                                                    <input type="text" name="juara"
                                                        class="form-control @error('juara') is-invalid @enderror"
                                                        value="{{ old('juara') }}"
                                                        placeholder="Masukkan Perolehan Prestasi" required>
                                                    @error('juara')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label">Status</label>
                                                <div class="wrap-input100 validate-input input-group">
                                                    <span class="input-group-text bg-white text-muted">
                                                        <i class="bi bi-chevron-double-right"></i>
                                                    </span>
                                                    <select name="status" class="form-control" required>
                                                        {{-- <option>Pilih Opsi</option> --}}
                                                        <option value="Disetujui"
                                                            @if (old('status') == 'Disetujui') selected @endif>
                                                            Disetujui</option>
                                                        {{-- <option value="Tidak Disetujui"
                                                            @if (old('status') == 'Tidak Disetujui') selected @endif>
                                                            Tidak Disetujui</option> --}}
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                        class="bi bi-chevron-left"></i> Kembali</button>
                <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i> Simpan</button>
            </div>
            </form>
            @endif


        </div>
    </div>
</div>
