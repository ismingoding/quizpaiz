

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Mobil</h3>
            <a href="<?php echo e(route('admin.cars.create')); ?>" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Gambar Mobil</th>
                            <th>Harga Mobil</th>
                            <th>Status Mobil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td> <?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($car->nama_mobil); ?></td>
                                <td>
                                    <img src="<?php echo e(Storage::url($car->gambar)); ?>" width="200" alt="">
                                </td>
                                <td><?php echo e($car->harga_sewa); ?></td>
                                <td><?php echo e($car->status); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.cars.edit', $car->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <form onclick="return confirm('anda yakin menghapus data ini?')" class="d-inline" action="<?php echo e(route('admin.cars.destroy', $car->id)); ?>" method="post">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KUIS\resources\views/admin/cars/index.blade.php ENDPATH**/ ?>