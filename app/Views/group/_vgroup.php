<?= $this->extend('template/_layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h4><b>MASTER DATA GROUP</b></h4>

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
                        <th>Action</th>
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
                            <td>
                                <form action="<?= base_url(); ?>/group/delete/<?= $gr->id; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" id="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin');">Delete</button>
                                </form>
                                <a class="btn btn-warning" href="<?= base_url(); ?>/group/edit/<?= $gr->id; ?>">Edit</a>
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