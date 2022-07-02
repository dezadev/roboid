<?= $this->extend('template/_layout'); ?>

<?= $this->section('content'); ?>

<div class="container register-card-body">
    <div class="card">
        <div class="card-header">
            <h4>DATA USER</h4>
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
                        <?php if (session()->get('role') == 1) :  ?>
                            <th>Action</th>
                        <?php endif; ?>

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
                            <?php if (session()->get('role') == 1) :  ?>
                                <td>
                                    <a class="btn btn-info btn-sm" href="<?= base_url(); ?>/register/edit/<?= $row->id; ?>">Edit</a>
                                    <form action="<?= base_url(); ?>/register/delete/<?= $row->username; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" id="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin');">Delete</button>
                                    </form>
                                </td>
                            <?php endif; ?>
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