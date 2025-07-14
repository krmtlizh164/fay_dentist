<h1>Tambah Artikel</h1>
<form action="/admin/artikel/tambah" method="post">
    <?= csrf_field() ?>
    <div>
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="content">Konten:</label>
        <textarea name="content" id="content" required></textarea>
    </div>
    <button type="submit">Simpan Artikel</button>
</form>
