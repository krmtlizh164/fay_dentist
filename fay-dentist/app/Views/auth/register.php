<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registrasi Pasien</h4>
                </div>
                <div class="card-body">
                    
                    <!-- Pesan Sukses -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= esc(session()->getFlashdata('success')) ?>
                        </div>
                    <?php endif; ?>

                    <!-- Pesan Error Umum -->
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= esc(session()->getFlashdata('error')) ?>
                        </div>
                    <?php endif; ?>

                    <!-- Pesan Error Validasi -->
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger">
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <p><?= esc($error) ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="username" 
                                name="username" 
                                value="<?= old('username') ?>" 
                                placeholder="Masukkan username"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input 
                                type="password" 
                                class="form-control" 
                                id="password" 
                                name="password" 
                                placeholder="Minimal 8 karakter"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="pass_confirm" class="form-label">Konfirmasi Password</label>
                            <input 
                                type="password" 
                                class="form-control" 
                                id="pass_confirm" 
                                name="pass_confirm" 
                                placeholder="Ulangi password"
                                required
                            >
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Daftar</button>
                    </form>

                    <div class="mt-3 text-center">
                        Sudah punya akun? <a href="<?= base_url('login') ?>">Login disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
