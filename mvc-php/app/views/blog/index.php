<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Buat Artikel
            </button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Artikel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>blog/tambah" method="post">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis">
                </div>
                <div class="form-group
                    <label for="tulisan">Tulisan</label>
                    <textarea class="form-control" id="tulisan" name="tulisan" rows="3"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah Artikel</button>
            </div>
        </div>
    </div>
</div>