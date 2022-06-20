<?= $this->extend('template/_layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h4><b> DATA USER</b></h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <a href="<?= base_url(); ?>/register/tambah" class="btn btn-primary btn-sm">Tambah User</a>
            <hr />
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-sm">

                    <?php
                    $i = 1;
                    foreach ($user as $row) {
                    ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row->username; ?></td>
                            <td><?= $row->name; ?></td>
                            <td><?= $row->role; ?></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="<?= base_url(); ?>/register/edit/<?= $row->username; ?>">Edit</a>
                                <form action="<?= base_url(); ?>/register/delete/<?= $row->username; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" id="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>