<nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
    <div class="container">
        <a class="navbar-brand" href="#">Internet Plankton</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active === 'home') ? 'active' : ''); ?>" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active === 'about') ? 'active' : ''); ?>" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active === 'posts') ? 'active' : ''); ?>" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active === 'categories') ? 'active' : ''); ?>" href="/categories">Categories</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-item"></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/login" class="nav-link <?php echo e(($active === 'login') ? 'active' : ''); ?>"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH E:\Application\coba-laravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>