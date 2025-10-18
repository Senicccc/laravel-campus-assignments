<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
        <h1>Login</h1>
        <form action="<?php echo e(route('login.post')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>

        <p>Jika belum memiliki akun, bisa daftar dibawah ini:<br><a href="<?php echo e(route('register')); ?>">Register</a></p>
    </div>

</body>
</html>
<?php /**PATH D:\Semester 5\Framework Pemrograman Web\laravel-campus-assignments\praktikum7\resources\views/auth/login.blade.php ENDPATH**/ ?>