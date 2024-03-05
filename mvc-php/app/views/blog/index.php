<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Blog</h3>
            <?php foreach ($data['blog'] as $key => $value): ?>
                <ul>
                    <li><?= $value['penulis']; ?></li>
                    <li><?= $value['judul']; ?></li>
                    <li><?= $value['tulisan']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>