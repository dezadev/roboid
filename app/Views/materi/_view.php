<?= $this->extend('template/_layout'); ?>

<?= $this->section('content'); ?>

<div class="container register-card-body">
    <div class="card">
        <div class="card-header">
            <h4> DATA MATERI</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <a href="<?= base_url(); ?>/materi/create" class="btn btn-primary btn-sm">Upload</a>
            <hr />
            <table class="table table-bordered table-hover">
                <thead class="thead-light ">
                    <tr>
                        <th>No</th>
                        <th>Nama Materi</th>
                        <th>Group</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-sm">

                    <?php
                    $i = 1 + (10 * ($curentPage - 1));
                    // $no  = 1;
                    foreach ($materi as $row) {
                    ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row->nama_materi; ?></td>
                            <td><?= $row->group_materi; ?></td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="<?= base_url(); ?>/upload/<?= $row->nama_materi; ?>" target="_BLANK">Baca</a>
                                <a class="btn btn-info btn-xs" href="<?= base_url(); ?>/materi/download/<?= $row->id; ?>">Download</a>
                                <?php if (session()->get('role') == 1) :  ?>
                                    <a class="btn btn-success btn-xs" href="<?= base_url(); ?>/materi/edit/<?= $row->id; ?>">Edit</a>
                                    <form action="<?= base_url(); ?>/materi/delete/<?= $row->id; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" id="DELETE">
                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin');">Delete</button>
                                    </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?= $pager->links('halaman', 'pagination') ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>