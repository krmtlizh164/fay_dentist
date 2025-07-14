<?= $this->extend('/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <article class="my-4">
        <h1><?= esc($artikel['judul']) ?></h1>
        
        <?php if ($artikel['gambar']): ?>
        <img src="/uploads/artikel/<?= $artikel['gambar'] ?>" 
             class="img-fluid rounded my-3"
             alt="<?= esc($artikel['judul']) ?>"
             onerror="this.onerror=null;this.src='https://placehold.co/800x400?text=Gambar+Artikel'">
        <?php endif; ?>
        
        <div class="article-content py-3">
            <?= $artikel['isi'] ?>
        </div>
        
        <div class="mt-4">
            <a href="/artikel" class="btn btn-secondary">Kembali ke Daftar Artikel</a>
        </div>
    </article>
</div>
<?= $this->endSection() ?>
