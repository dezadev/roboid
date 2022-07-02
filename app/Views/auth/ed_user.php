<?= $this->extend('template/_layout'); ?>

<?= $this->section('content'); ?>

<div class="container register-card-body">
    <div class="card">
        <div class="card-header">
            <h4>EDIT USER</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/register/update/<?= $user->id; ?>">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="group" class="form-label">User Name</label>
                    <input class="form-control" id="username" name="username" rows="3" value="<?= $user->username; ?>" readonly></input>
                </div>
                <div class="mb-3">
                    <label for="group" class="form-label">Nama</label>
                    <input class="form-control" id="name" name="name" rows="3" value="<?= $user->name; ?>" required></input>
                </div>
                <div class="mb-3">
                    <label for="group" class="form-label">Role</label>
                    <input class="form-control" id="role" name="role" rows="3" value="<?= $user->role; ?>" required></input>
                </div>
                <div class="mb-3">
                    <input type="hidden" id="password" name="password" rows="3" value="<?= $user->password; ?>" required></input>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-danger btn-sm" value="Simpan" />
                    <a href="/register" class="btn btn-info btn-sm">Batal</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>