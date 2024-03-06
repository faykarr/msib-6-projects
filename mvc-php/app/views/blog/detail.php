<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['blog']['judul']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['blog']['penulis']; ?></h6>
            <p class="card-text"><?= $data['blog']['tulisan']; ?></p>
            <a href="<?= BASE_URL; ?>blog" class="btn btn-warning card-link">Kembali</a>
            <a href="<?= BASE_URL; ?>blog/delete/<?= $data['blog']['id']; ?>" class="btn btn-danger card-link" onclick="return confirm('Are you sure you want to delete this item?');">Hapus Buku</a>
        </div>
    </div>
</div>