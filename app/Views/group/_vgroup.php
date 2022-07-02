<?= $this->extend('template/_layout'); ?>

<?= $this->section('content'); ?>

<div class="container register-card-body">
    <div class="card">
        <div class="card-header">
            <h4>MASTER DATA GROUP</h4>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <a href="<?= base_url(); ?>/group/create" class="btn btn-primary btn-sm">Tambah Group</a>
            <hr />

            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Group</th>
                        <?php if (session()->get('role') == 1) :  ?>
                            <th>Action</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody class="table-sm">
                    <?php
                    $no  = 1;
                    foreach ($group as $gr) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $gr->group_materi; ?></td>
                            <?php if (session()->get('role') == 1) :  ?>
                                <td>
                                    <form action="<?= base_url(); ?>/group/delete/<?= $gr->id; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" id="DELETE">
                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin');">Delete</button>
                                    </form>
                                    <a class="btn btn-warning btn-xs" href="<?= base_url(); ?>/group/edit/<?= $gr->id; ?>">Edit</a>
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