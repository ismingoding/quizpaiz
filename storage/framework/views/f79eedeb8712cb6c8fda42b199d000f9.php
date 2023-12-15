

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('transaksi.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="no_transaksi">No Transaksi</label>
                    <input type="text" name="no_transaksi" class="form-control" value="<?php echo e(old('no_transaksi')); ?>">
                </div>
                <div class="form-group">
                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                    <input type="date" name="tgl_transaksi" class="form-control" value="<?php echo e(old('tgl_transaksi')); ?>">
                </div>
                <select name="id_mobil" class="form-control" required>
                    <option value="">-- Pilih Pelanggan --</option>
                            <?php $__currentLoopData = $data_mobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($j->id); ?>"><?php echo e($j->nama_mobil); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <div class="form-group">
                    <label for="id_mobil">Mobil</label>
                    <input type="text" name="id_mobil" class="form-control" value="<?php echo e(old('id_mobil')); ?>">
                </div>
                <div class="form-group">
                    <label for="lamasewa">Lama Sewa</label>
                    <input type="number" name="lamasewa" class="form-control" value="<?php echo e(old('lamasewa')); ?>">
                </div>
                <div class="form-group">
                    <label for="total_bayar">Total Bayar</label>
                    <input type="number" name="total_bayar" class="form-control" value="<?php echo e(old('total_bayar')); ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KUIS\resources\views/admin/transaksi/create.blade.php ENDPATH**/ ?>