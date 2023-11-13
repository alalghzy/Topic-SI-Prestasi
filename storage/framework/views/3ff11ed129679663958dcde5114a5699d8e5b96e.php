
<?php $__env->startSection('title', 'Prestasi'); ?>


<?php $__env->startSection('content'); ?>


        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Prestasi Mahasiswa</h1>
                    <a href="" class="h5 text-white">Fakultas Teknik</a>
                    <a href="" class="h5 text-white">Universitas Bengkulu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


     <div class="container-fluid">
        <div class="text-center mb-4">
          <h1 class="h3 mb-0 text-gray-800">Prestasi Mahasiswa Fakultas Teknik</h1>
        </div>

       <div class="row">
         <div class="col-lg-12">
           <div class="card mb-4">
             <div class="table-responsive p-3">
             <?php if($kejuaraan->count()): ?>
             <a href="<?php echo e(route('download')); ?>" id="pdf" type="button" onclick="myFunction()" class="btn btn-outline-success mb-3" target="blank">Download
                <i class="bi bi-download"></i>
              </a>
             <?php else: ?>

             <?php endif; ?>
               <table class="table table-bordered" id="dataTable">
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
                   </tr>
                 </thead>
                 <tbody>
                   <?php $__currentLoopData = $kejuaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                     <th scope="row"><?php echo e($loop->index + 1); ?></th>
                     <td><?php echo e($item->name); ?></td>
                     <td><?php echo e($item->npm); ?></td>
                     <td><?php echo e($item->jurusan); ?></td>
                     <td><?php echo e($item->juara); ?></td>
                     <td><?php echo e($item->lomba); ?></td>
                     <td><?php echo e($item->penyelenggara); ?></td>
                     <td><?php echo e($item->tingkat); ?></td>
                     <td><?php echo e(\Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y')); ?></td>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>

          </div>
        </div>


        </form>
        </div>
      </div>


      <script>
        function myFunction() {
          // onlick agar button tidak menjadi undefined ketika di tekan
          // open().print() membuka view kemudian print
          document.getElementById("pdf").onclick = open('download').print();
        }
      </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts_landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/landingpage/data_prestasi.blade.php ENDPATH**/ ?>