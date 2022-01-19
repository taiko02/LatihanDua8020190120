<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e($nama_tombol); ?> data</div>

                    <div class="card-body">

                        <?php echo Form::model($objek, ['action' => $action, 'method' => $method]); ?>


                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <?php echo Form::text('judul', null, ['class' => 'form-control']); ?>

                            <span class="text-helper"><?php echo e($errors->first('judul')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <?php echo Form::text('pengarang', null, ['class' => 'form-control']); ?>

                            <span class="text-helper"><?php echo e($errors->first('pengarang')); ?></span>
                        </div>
                        <?php echo Form::submit($nama_tombol, ['class' => 'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\belajar-laravel\pendaftaran8020190120\resources\views/buku_form.blade.php ENDPATH**/ ?>