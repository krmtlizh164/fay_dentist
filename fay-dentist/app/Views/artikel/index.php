<?= $this->extend('/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2 class="my-4">Artikel Kesehatan Gigi</h2>
    
    <div class="row">
        <?php foreach ($artikel_list as $artikel): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <?php if ($artikel['gambar']): ?>
                <img src="/uploads/artikel/<?= $artikel['gambar'] ?>" 
                     class="card-img-top"
                     alt="<?= esc($artikel['judul']) ?>"
                     onerror="this.onerror=null;this.src='https://placehold.co/300x200?text=Gambar+Artikel'">
                <?php endif; ?>
                
                <div class="card-body">
                    <h5 class="card-title"><?= esc($artikel['judul']) ?></h5>
                    <p class="card-text"><?= substr(strip_tags($artikel['isi']), 0, 100) ?>...</p>
                    <a href="/artikel/<?= $artikel['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
