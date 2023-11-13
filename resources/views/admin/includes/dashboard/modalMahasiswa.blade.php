<!-- Modal -->
<div class="modal fade" id="modalMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Mahasiswa Terdaftar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-hover table-bordered" id="tabelMahasiswa">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>NPM</th>
                        <th>JURUSAN</th>
                        <th>EMAIL</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($get_mahasiswa->count())
                        @foreach ($get_mahasiswa as $key => $post)
                            <tr>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->username }}</td>
                                <td>{{ $post->jurusan }}</td>
                                <td>{{ $post->email }}</td>
                        @endforeach
                    @else
                        <div class="alert alert-danger">
                            Data belum tersedia !
                        </div>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>
