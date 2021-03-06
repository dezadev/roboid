<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
        <span class="badge badge-danger navbar-badge"><?= session()->get('role'); ?></span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="<?= base_url(); ?>/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                        <?= session()->get('name'); ?>
                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm"><?= session()->get('username'); ?></p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>Online 24 jam</p>
                </div>
            </div>
            <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <?php if (session()->get('role') == 1) :  ?>
            <a href="/register/tambah" class="dropdown-item dropdown-footer">Tambah User</a>
            <div class="dropdown-divider"></div>
            <a href="/logout" class="dropdown-item dropdown-footer">Logout</a>
        <?php else : ?>
            <a href="/logout" class="dropdown-item dropdown-footer">Logout</a>
        <?php endif ?>
    </div>
</li>