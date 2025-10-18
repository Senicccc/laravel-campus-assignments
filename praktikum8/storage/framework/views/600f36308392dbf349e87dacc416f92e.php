

<?php $__env->startSection('content'); ?>
    <div>
        <?php if($errors->any()): ?>
            <div style="color: red;">
                <?php echo e($errors->first()); ?>

            </div>
        <?php elseif(session('success')): ?>
            <div style="color: green;">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    </div>

    <h1>Welcome to Home Page</h1>

    <h2>Data Buku</h2>
    <a href="<?php echo e(route('buku.create')); ?>">Tambah Buku</a>
    <br><br>

    <?php if(session('success')): ?>
        <div style="color: green"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($buku->judul); ?></td>
                    <td><?php echo e($buku->pengarang); ?></td>
                    <td><?php echo e($buku->kategoriBuku ? $buku->kategoriBuku->nama_kategori : 'Tidak ada kategori'); ?></td>
                    <td>
                        <a href="<?php echo e(route('buku.edit', $buku->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('buku.destroy', $buku->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Tidak ada data buku</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 5\Framework Pemrograman Web\laravel-campus-assignments\praktikum7\resources\views/pages/home.blade.php ENDPATH**/ ?>