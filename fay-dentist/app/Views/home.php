<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1 class="my-4">Selamat Datang di Fay Dentist Wiradesa</h1>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <img src="https://placehold.co/800x400?text=Klinik+Gigi+Fay+Dentist" class="card-img-top" alt="Gambar utama klinik gigi">
                <div class="card-body">
                    <p class="card-text">Klinik gigi profesional dengan pelayanan terbaik di Wiradesa. Fasilitas modern dan dokter spesialis siap melayani Anda.</p>
                    <a href="/reservasi" class="btn btn-primary">Buat Reservasi Sekarang</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Jam Operasional
                </div>
                <div class="card-body">
                    <p>Senin-Jumat: 08.00 - 21.00</p>
                    <p>Sabtu-Minggu: 09.00 - 17.00</p>
                </div>
            </div>
        </div>
    </div>
    
    <h2 class="my-4">Artikel Terbaru</h2>
    <div class="row">
        <?php foreach ($artikel_terbaru as $artikel): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/300x200?text=Artikel+Gigi" class="card-img-top" alt="Gambar artikel">
                <div class="card-body">
                    <h5 class="card-title"><?= $artikel['judul'] ?></h5>
                    <p class="card-text"><?= substr($artikel['isi'], 0, 100) ?>...</p>
                    <a href="/artikel/<?= $artikel['id'] ?>" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
