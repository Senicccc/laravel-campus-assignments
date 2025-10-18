<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <a href="<?php echo e(route('buku.index')); ?>">Kembali ke Daftar Buku</a>
    <br><br>
    <?php if($errors->any()): ?>
        <div style="color: red">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('buku.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="<?php echo e(old('judul')); ?>"><br><br>
        <label for="pengarang">Pengarang:</label><br>
        <input type="text" id="pengarang" name="pengarang" value="<?php echo e(old('pengarang')); ?>"><br><br>
        <label for="kategori_buku_id">Kategori Buku:</label><br>
        <select id="kategori_buku_id" name="kategori_buku_id">
            <option value="">Pilih Kategori</option>
            <?php $__currentLoopData = $kategoriBuku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($kategori->id); ?>" <?php echo e(old('kategori_buku_id') == $kategori->id ? 'selected' : ''); ?>>
                    <?php echo e($kategori->nama_kategori); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html><?php /**PATH D:\Semester 5\Framework Pemrograman Web\laravel-campus-assignments\praktikum7\resources\views/create-buku.blade.php ENDPATH**/ ?>