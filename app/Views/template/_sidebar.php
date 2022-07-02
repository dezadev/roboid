<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="<?= base_url(); ?>/dist/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AHASS LEARNING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url(); ?>/dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get('name'); ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php if (session()->get('role') == 2) : ?>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                MENU
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/home/asy" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-warning nav-icon"></i>
                                    <p>NMS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/claim" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-danger nav-icon"></i>
                                    <p>WCL</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/lkh" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-info nav-icon"></i>
                                    <p>PQM</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/nsp" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-success nav-icon"></i>
                                    <p>NSP</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php elseif (session()->get('role') == 3) : ?>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                MENU
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/home/asy" class="nav-link ">
                                    <i class="far fa-arrow-alt-circle-right text-warning nav-icon"></i>
                                    <p>NMS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/claim" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-danger nav-icon"></i>
                                    <p>WCL</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/lkh" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-info nav-icon"></i>
                                    <p>PQM</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/nsp" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-success nav-icon"></i>
                                    <p>NSP</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- menu master data -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                MASTER DATA
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/materi" class="nav-link ">
                                    <i class="far fa-file-alt text-warning nav-icon"></i>
                                    <p>MATERI</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/group" class="nav-link">
                                    <!-- <i class="fal fa-file-archive"></i> -->
                                    <i class="far fa-copy text-danger nav-icon"></i>
                                    <p>GROUP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">
                                    <i class="far fa-user text-info nav-icon"></i>
                                    <p>USER</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                MENU
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/home/asy" class="nav-link ">
                                    <!-- <i class="far fa-arrow-alt-circle-right"></i> -->
                                    <i class="far fa-arrow-alt-circle-right text-warning nav-icon"></i>
                                    <p>NMS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/claim" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-danger nav-icon"></i>
                                    <p>WCL</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/lkh" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-info nav-icon"></i>
                                    <p>PQM</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/home/nsp" class="nav-link">
                                    <i class="far fa-arrow-alt-circle-right text-success nav-icon"></i>
                                    <p>NSP</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- menu master data -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                MASTER DATA
                                <!-- <i class="right fas fa-angle-left"></i> -->
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/materi" class="nav-link ">
                                    <i class="far fa-file-alt text-warning nav-icon"></i>
                                    <p>MATERI</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/group" class="nav-link">
                                    <!-- <i class="fal fa-file-archive"></i> -->
                                    <i class="far fa-copy text-danger nav-icon"></i>
                                    <p>GROUP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">
                                    <i class="far fa-user text-info nav-icon"></i>
                                    <p>USER</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>