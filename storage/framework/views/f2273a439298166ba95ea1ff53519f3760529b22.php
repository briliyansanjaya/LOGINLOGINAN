<nav class="navbar sticky-top" style=" background-color: 1B2733">
    <div class="container-fluid">
        <a class="navbar-brand mt-1 me-auto" href="/">
            <img src="https://earlygame-prod.cdn.earlygame.com/images/Valorant-Logo_2021-09-17-094641_jsqj.png" alt="Valorant" style="width: 135px; height: 40px;">
        </a>

        <?php if(auth()->guard()->check()): ?>
            <div class="d-flex mx-1">
                <a class="nav-link mr-2" href="/add"><button type="submit" class="btn btn-success">Add</button></a>
                <form action="/logout" method="POST">
                    <?php echo csrf_field(); ?>
                    <a class="nav-link text-white" href="/logout"><button type="submit" class="btn btn-danger">Logout</button></a>
                </form>
             </div>
        <?php else: ?>
            <a class="nav-link text-white mx-1" href="/login">Login</a>
            <a class="text-white mb-1">|</a>
            <a class="nav-link text-white mx-1" href="/register">Register</a>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\GSLC-ValorantAgents\resources\views/components/navbar.blade.php ENDPATH**/ ?>