<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="<?php echo e(url('admin/buku/tambah', [])); ?>" class="btn btn-primary btn-sm">Tambah</a>
                        <h3>Halaman data buku</h3>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Tanggal buat</th>
                                    <th>Tanggal update</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $objek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->judul); ?></td>
                                        <td style="width: 15%"><?php echo e($item->pengarang); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('admin/buku/edit/' . $item->id, [])); ?>"
                                                class="btn btn-success btn-sm">
                                                Edit
                                            </a>
                                            <a href="<?php echo e(url('admin/buku/hapus/' . $item->id, [])); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah anda yakin mengahapus data ini?')">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\belajar-laravel\pendaftaran8020190120\resources\views/buku_index.blade.php ENDPATH**/ ?>