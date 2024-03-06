<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Blog</h3>
            <?php foreach ($data['blog'] as $key => $value): ?>
                <ul class="list-group">
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $value['judul']; ?>
                        <a href="<?= BASE_URL; ?>blog/detail/<?= $value['id']; ?>" class="btn btn-primary">Baca Buku</a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>