<?= $this->extend('template/_layout'); ?>

<?= $this->section('content'); ?>
<div class="container register-card-body">
    <div class="card">
        <div class="card-header">
            <h4>FORM UPLOAD MATERI</h4>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/materi/save" enctype="multipart/form-data" class="d-inline">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_materi" class="form-label">Materi</label>
                    <!-- <input type="file" class="form-control" id="nama_materi" name="nama_materi"> -->
                    <div class="custom-file">
                        <input type="file" multiple="" class="custom-file-input" id="nama_materi" name="nama_materi[]" onchange="namaFile()">
                        <label class="custom-file-label" for="nama_materi">Choose file</label>
                        <p id="detail_file"></p>

                    </div>

                </div>
                <div class="mb-3">
                    <label for="group_materi" class="form-label">Group Materi</label>
                    <div>
                        <select name="group_materi" id="group_materi" class="form-control">
                            <option selected>Pilih Group</option>
                            <?php foreach ($group as $pilih) : ?>
                                <option value="<?= $pilih->group_materi; ?>"><?= $pilih->group_materi; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" id="btn_upload" class="btn btn-danger" value="Upload" />
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>