<!-- Modal -->
<div class="modal fade" id="modalLomba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Data Lomba</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-hover table-bordered" id="tabelLomba">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>NPM</th>
                        <th>LOMBA</th>
                        <th>PENYELENGGARA</th>
                        <th>TINGKAT</th>
                        <th>TANGGAL</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($get_lomba->count())
                        @foreach ($get_lomba as $key => $post)
                            <tr>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->user_id }}</td>
                                <td>{{ $post->lomba }}</td>
                                <td>{{ $post->penyelenggara }}</td>
                                <td>{{ $post->tingkat }}</td>
                                <td>{{ $post->tanggal }}</td>
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
