

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Form Edit Data
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.cars.update', $car->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group">
                            <label for="nama_mobil">Nama Mobil</label>
                            <input type="text" name="nama_mobil" class="form-control" value="<?php echo e(old('nama_mobil', $car->nama_mobil)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga_sewa">Harga Sewa</label>
                            <input type="number" name="harga_sewa" class="form-control" value="<?php echo e(old('harga_sewa', $car->harga_sewa)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="bahan_bakar">Bahan Bakar</label>
                            <input type="text" name="bahan_bakar" class="form-control" value="<?php echo e(old('bahan_bakar', $car->bahan_bakar)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_kursi">Jumlah Kursi</label>
                            <input type="number" name="jumlah_kursi" class="form-control"value="<?php echo e(old('jumlah_kursi', $car->jumlah_kursi)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Transmisi</label>
                            <select name="transmisi" id="transmisi" class="form-control">
                                <option <?php echo e($car->transmisi == 'manual' ? 'selected' : null); ?> value="manual">Manual</option>
                                <option <?php echo e($car->transmisi == 'otomatis' ? 'selected' : null); ?> value="otomatis">Otomatis</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option <?php echo e($car->status == 'tersedia' ? 'selected' : null); ?> value="tersedia">Tersedia</option>
                                <option <?php echo e($car->status == 'tidak tersedia' ? 'selected' : null); ?> value="tidak tersedia">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5"><?php echo e(old('deskripsi', $car->deskripsi)); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="p3k">P3K</label>
                            <select name="p3k" id="p3k" class="form-control">
                                <option <?php echo e($car->p3k === 1 ? 'selected' : null); ?> value="1">Tersedia</option>
                                <option <?php echo e($car->p3k === 0 ? 'selected' : null); ?> value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="audio">Audio</label>
                            <select name="audio" id="audio" class="form-control">
                                <option <?php echo e($car->audio === 1 ? 'selected' : null); ?> value="1">Tersedia</option>
                                <option <?php echo e($car->audio === 0 ? 'selected' : null); ?> value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="charger">Charger</label>
                            <select name="charger" id="charger" class="form-control">
                                <option <?php echo e($car->charger === 1 ? 'selected' : null); ?> value="1">Tersedia</option>
                                <option <?php echo e($car->charger === 0 ? 'selected' : null); ?> value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ac">AC</label>
                            <select name="ac" id="ac" class="form-control">
                                <option <?php echo e($car->ac === 1 ? 'selected' : null); ?> value="1">Tersedia</option>
                                <option <?php echo e($car->ac === 0 ? 'selected' : null); ?> value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
        <div class="col-lg-4">
        <div class="card">
                <div class="card-header">
                    Form Edit Gambar
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.cars.updateImage', $car->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group">
                            <img src="<?php echo e(Storage::url($car->gambar)); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KUIS\resources\views/admin/cars/edit.blade.php ENDPATH**/ ?>