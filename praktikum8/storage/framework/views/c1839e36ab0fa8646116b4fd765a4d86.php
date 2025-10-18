<nav>
    <ul>
        <a href="/home"><li>Home</li></a>
        <a href="/buku"><li>Buku</li></a>
        <form action="<?php echo e(route('logout')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <button type="submit">Logout</button>
        </form>
    </ul>
</nav>
<?php /**PATH D:\Semester 5\Framework Pemrograman Web\laravel-campus-assignments\praktikum7\resources\views/components/navbar.blade.php ENDPATH**/ ?>