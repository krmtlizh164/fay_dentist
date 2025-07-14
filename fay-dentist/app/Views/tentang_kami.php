<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container py-4">

    <!-- Header Section -->
    <section class="mb-5 text-center">
        <h1 class="display-4 mb-3">Tentang Fay Dentist</h1>
        <p class="lead">Klinik gigi profesional dengan layanan lengkap dan peralatan modern di Wiradesa</p>
    </section>

    <!-- Profil Klinik -->
    <section class="row mb-5">
        <div class="col-md-6">
            <h2 class="mb-3">Profil Klinik</h2>
            <p>Fay Dentist berdiri sejak tahun 2010 dengan komitmen memberikan pelayanan kesehatan gigi terbaik di wilayah Wiradesa dan sekitarnya. Kami memiliki tim dokter gigi spesialis yang berpengalaman di bidangnya.</p>
            <p>Klinik kami dilengkapi dengan peralatan modern dan mengikuti standar protokol kesehatan yang ketat untuk kenyamanan dan keamanan pasien.</p>
        </div>
        <div class="col-md-6">
            <img src="https://placehold.co/800x500?text=Gedung+Fay+Dentist" 
                 alt="Gedung Klinik Fay Dentist" 
                 class="img-fluid rounded shadow">
        </div>
    </section>

    <!-- Tim Dokter -->
    <section class="mb-5">
        <h2 class="text-center mb-4">Tim Dokter Kami</h2>
        <div class="row">
            <?php foreach ($tim_dokter as $dokter): ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url('uploads/dokter/' . $dokter['foto']) ?>" 
                        class="card-img-top"
                        alt="Foto <?= $dokter['nama'] ?>"
                        style="height: 600px; width: 100%; object-fit: cover; object-position: center;"
                        onerror="this.onerror=null;this.src='https://placehold.co/400x500?text=Foto+Dokter'">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $dokter['nama'] ?></h5>
                        <p class="card-text text-muted"><?= $dokter['spesialisasi'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- Kontak & Lokasi -->
    <section class="row mb-5">
        <div class="col-md-6">
            <h2 class="mb-3">Kontak Kami</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="bi bi-geo-alt-fill me-2"></i>
                    <?= $kontak['alamat'] ?>
                </li>
                <li class="list-group-item">
                    <i class="bi bi-telephone-fill me-2"></i>
                    <?= $kontak['telepon'] ?>
                </li>
                <li class="list-group-item">
                    <i class="bi bi-envelope-fill me-2"></i>
                    <?= $kontak['email'] ?>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2 class="mb-3">Jam Operasional</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <?php foreach ($kontak['jam_operasional'] as $hari => $jam): ?>
                    <tr>
                        <th><?= $hari ?></th>
                        <td><?= $jam ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>

    <!-- Peta Lokasi -->
    <section class="mb-4">
        <h2 class="text-center mb-3">Lokasi Klinik</h2>
        <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.935478168953!2d109.6190723153701!3d-6.897768795031411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70243664251977%3A0x1a9f3eae78c97e18!2sWiradesa%2C%20Kec.%20Wiradesa%2C%20Kabupaten%20Pekalongan%2C%20Jawa%20Tengah!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                    allowfullscreen="" 
                    loading="lazy"
                    class="rounded shadow"></iframe>
        </div>
    </section>

</div>
<?= $this->endSection() ?>
