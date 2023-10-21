<div class="container">
    <h3 class="mt-3">Daftar Mahasiswa</h3>
    <div class="row mt-3">
        <div class="col-lg-6">
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>