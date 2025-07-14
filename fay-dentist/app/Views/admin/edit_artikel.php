<h1>Edit Artikel</h1>
<form action="/admin/artikel/edit/<?= $article['id'] ?>" method="post">
    <?= csrf_field() ?>
    <div>
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" value="<?= $article['title'] ?>" required>
    </div>
    <div>
        <label for="content">Konten:</label>
        <textarea name="content" id="content" required><?= $article['content'] ?></textarea>
    </div>
    <button type="submit">Update Artikel</button>
</form>
