<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container py-4">
    <h1>Reservasi Klinik</h1>
    <a href="/reservasi/buat" class="btn btn-primary mb-3">Buat Reservasi Baru</a>
    
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Keluhan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservasi_list as $reservasi): ?>
                    <tr>
                        <td><?= $reservasi['tanggal'] ?></td>
                        <td><?= $reservasi['jam'] ?></td>
                        <td><?= $reservasi['keluhan'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
