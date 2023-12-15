

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Form Edit Data
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('pelanggan.update', $id->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group">
                            <label for="namapelanggan">Nama Pelanggan</label>
                            <input type="text" name="namapelanggan" class="form-control" value="<?php echo e(old('namapelanggan', $pelanggan->namapelanggan)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nohp">Harga Sewa</label>
                            <input type="text" name="nohp" class="form-control" value="<?php echo e(old('nohp', $pelanggan->nohp)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="form-control" rows="4" cols="40" value="<?php echo e(old('alamat', $pelanggan->alamat)); ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KUIS\resources\views/admin/pelanggan/edit.blade.php ENDPATH**/ ?>