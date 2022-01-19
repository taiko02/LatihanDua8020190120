<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    Kamu berhasil masuk!

                    <h2><?php echo e($judul); ?></h2>
                    <table class="table table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th>Judul</th>
                            <th>Pengarang</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $objek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($row->judul); ?></td>
                                <td><?php echo e($row->pengarang); ?></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\belajar-laravel\pendaftaran8020190120\resources\views/home.blade.php ENDPATH**/ ?>