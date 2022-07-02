<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <link rel="shortcut icon" type="image/png" href="/dist/img/ahass2.png" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/dist/css/adminlte.min.css">
</head>

<!-- gunakan class dark-mode untuk warna gelap -->

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= base_url(); ?>/dist/img/ahass.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <?= $this->include('template/_aktifuser'); ?>
                <!-- Notifications Dropdown Menu -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('template/_sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <?php $this->renderSection('content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            Copyright &copy; 2019-<?= date('Y'); ?> <a href="#">TSD JATENG</a>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url(); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?= base_url(); ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?= base_url(); ?>/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url(); ?>/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?= base_url(); ?>/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url(); ?>/dist/js/pages/dashboard2.js"></script>

    <!-- coba link active -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script> -->

    <!-- percobaan kedua -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

    <script type="text/javascript">
        $(function() {
            var path = window.location.href; // Mengambil data URL pada Address bar
            $('nav a').each(function() {
                // Jika URL pada menu ini sama persis dengan path...
                if (this.href === path) {
                    // Tambahkan kelas "active" pada menu ini
                    $(this).addClass('active');
                }
            });
        });
    </script>

    <script>
        //menampilkan  nama file yg di upload
        function namaFile() {

            const file = document.querySelector('#nama_materi');
            const fileLabel = document.querySelector('.custom-file-label');

            fileLabel.textContent = file.files[0].name;
        }
        //nonaktifkan klik kanan
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        }, false);
    </script>
    <script>
        $('document').ready(function() {
            $('#nama_materi').change(function() {
                FileDetails();
            });

        });
    </script>
    <!-- menampilkan data upload -->
    <script>
        function FileDetails() {
            var fi = document.getElementById('nama_materi');
            if (fi.files.length > 0) {
                document.getElementById('detail_file').innerHTML =
                    'Total Files: <b>' + fi.files.length + '</b></br >';
                for (var i = 0; i <= fi.files.length - 1; i++) {
                    var no_file = i + 1;
                    var fname = fi.files.item(i).name;
                    var fsize = fi.files.item(i).size;
                    document.getElementById('detail_file').innerHTML =
                        document.getElementById('detail_file').innerHTML + no_file + ". " +
                        fname + ' (<b>' + bytesToSize(fsize) + '</b>)<br>';
                }
                document.getElementById('detail_file').style.display = "block";
                document.getElementById('span_file').style.display = "none";
            } else {
                alert('Please select a file.')
            }
        }

        function bytesToSize(bytes) {
            var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
            if (bytes == 0) return '0 Byte';
            var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
            return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
        }
    </script>
</body>

</html>