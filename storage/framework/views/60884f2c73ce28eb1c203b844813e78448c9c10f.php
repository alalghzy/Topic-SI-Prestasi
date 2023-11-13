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
                    <?php if($get_mahasiswa->count()): ?>
                        <?php $__currentLoopData = $get_mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->name); ?></td>
                                <td><?php echo e($post->username); ?></td>
                                <td><?php echo e($post->jurusan); ?></td>
                                <td><?php echo e($post->email); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            Data belum tersedia !
                        </div>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>
<?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/admin/includes/dashboard/modalMahasiswa.blade.php ENDPATH**/ ?>