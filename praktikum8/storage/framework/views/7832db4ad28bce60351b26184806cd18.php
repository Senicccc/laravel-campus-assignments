<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

    <div>
        <?php if($errors->any()): ?>
            <div style="color: red;">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>
    </div>

    <div>
        <h1>Daftar Akun</h1>
        <form action="<?php echo e(route('register.post')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Konfirmasi Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">Daftar</button>
        </form>

        <p>Jika sudah punya akun maka bisa <a href="<?php echo e(route('login')); ?>">Login di sini</a></p>
    </div>

</body>
</html>
<?php /**PATH D:\Semester 5\Framework Pemrograman Web\laravel-campus-assignments\praktikum7\resources\views/auth/register.blade.php ENDPATH**/ ?>