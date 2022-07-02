<?= $this->extend('template/_layout'); ?>
<?= $this->section('content'); ?>


<div class="container register-card-body">
    <div class="card">
        <div class="card-header">
            <h4>EDIT MATERI</h4>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/materi/update/<?= $materi->id; ?>">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="group" class="form-label">Nama Materi</label>
                    <input class="form-control" id="nama_materi" name="nama_materi" rows="3" value="<?= $materi->nama_materi; ?>" required></input>
                </div>
                <div class="mb-3">
                    <label for="group_materi" class="form-label">Group Materi</label>

                    <div>
                        <select name="group_materi" id="group_materi" class="form-control">
                            <option selected><?= $materi->group_materi; ?></option>
                            <?php foreach ($group as $pilih) : ?>
                                <option value="<?= $pilih->group_materi; ?>"><?= $pilih->group_materi; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-danger" value="simpan" />
                </div>

            </form>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>