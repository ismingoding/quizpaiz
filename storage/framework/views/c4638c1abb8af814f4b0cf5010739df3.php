

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Data Transaksi</h3>
            <a href="<?php echo e(route('transaksi.tampilcreate')); ?>" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Pelanggan</th>
                            <th>Mobil</th>
                            <th>Lama Sewa</th>
                            <th>Total Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                        ?>
                        <?php $__empty_1 = true; $__currentLoopData = $data_pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($row->no_transaksi); ?></td>
                                <td><?php echo e($row->tgl_transaksi); ?></td>
                                <td><?php echo e($row->namapelanggan); ?></td>
                                <td><?php echo e($row->nama_mobil); ?></td>
                                <td><?php echo e($row->lamasewa); ?></td>
                                <td><?php echo e($row->total_bayar); ?></td>
                                <td>
                                    <a href="<?php echo e(route('transaksi.tampiledit')); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <form onclick="return confirm('anda yakin menghapus data ini?')" class="d-inline" action="<?php echo e(route('transaksi.destroy', $row->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KUIS\resources\views/admin/transaksi/index.blade.php ENDPATH**/ ?>