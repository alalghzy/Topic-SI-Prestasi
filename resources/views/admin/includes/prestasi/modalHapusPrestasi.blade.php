<!-- Modal Hapus Prestasi-->
<div class="modal fade" id="modalHapusPrestasi-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah Anda
                    ingin menghapus data <br><span
                        style="background-color: rgb(124, 3, 3); color: white; padding-left: 5px; padding-right: 5px">{{ $item->npm }}, {{ $item->lomba }}</span>
                    ? </h1>
            </div>
            <div class="modal-body">
                <form action="{{ route('prestasi.delete', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-chevron-left"></i> Kembali</button>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
