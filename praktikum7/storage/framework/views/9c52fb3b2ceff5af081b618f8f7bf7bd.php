<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
</head>
<body>
    <h1>Data Buku</h1>
    <a href="<?php echo e(route('buku.create')); ?>">Tambah Buku</a>
    <br>

    <?php if(session('success')): ?>
        <div style="color: green"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Aksi</th>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($buku->judul); ?></td>
                <td><?php echo e($buku->pengarang); ?></td>
                <td>
                    <a href="<?php echo e(route('buku.edit', $buku->id)); ?>">Edit</a>
                    <form action="<?php echo e(route('buku.destroy', $buku->id)); ?>" method="POST" style="display: inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>
</body>
</html><?php /**PATH D:\Semester 5\Framework Pemrograman Web\buku\resources\views/home.blade.php ENDPATH**/ ?>