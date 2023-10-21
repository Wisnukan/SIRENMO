<div class="flash-data-kategori" data-flashdata="<?= $this->session->flashdata('flashData'); ?>"></div>
<div class="row">
    <div class="col-lg-12 col-xxl-9 d-flex" style="font-size: 15px;">
        <div class="card flex-fill table-responsive pt-4 ps-3 pe-3 pb-1">
            <table class="table table-sm table-hover table-striped my-0 mb-4">
                <?php if (!empty($pelanggan)) : ?>

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIK</th>
                            <th class="d-none d-xl-table-cell text-center">Nama</th>
                            <th class="d-none d-xl-table-cell text-center">Alamat</th>
                            <th class="d-none d-xl-table-cell text-center">No. Telepon</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pelanggan as $p) : ?>
                            <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $p['nik']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $p['nama']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $p['alamat']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $p['nomor_hp']; ?></td>
                                <td class="text-center">
                                    <a style="text-decoration: none;" class="badge bg-secondary ubahPelanggan" href="<?= base_url(); ?>pelanggan/edit/<?= $p['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalPelanggan" data-id="<?= $p['id']; ?>">Detail</a>
                                    <a style="text-decoration: none;" class="badge bg-success ubahPelanggan" href="<?= base_url(); ?>pelanggan/edit/<?= $p['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalPelanggan" data-id="<?= $p['id']; ?>">Edit</a>
                                    <a style="text-decoration: none;" class="badge bg-danger tombol-hapus-pelanggan" href="<?= base_url(); ?>pelanggan/hapus/<?= $p['id']; ?>">Hapus</a>
                                </td>
                            <?php endforeach; ?>
                            </tr>
                    </tbody>
                <?php else : ?>
                    <div class="alert alert-danger col-lg-12 mt-2" role="alert">
                        Data not found! <i>klik "Kirim" untuk kembali</i>
                    </div>
                <?php endif; ?>
            </table>
            <div class="row">
                <div class="col-md me-4"></div>
                <div class="col-md me-6"></div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalPelanggan" tabindex="-1" aria-labelledby="judulModalPelanggan" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModalPelanggan">Tambah Data Pelanggan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php base_url(); ?>pelanggan/tambah" method="post" enctype="multipart/form-data" class="formPelanggan">
                            <input type="hidden" name="id">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="number" class="form-control" id="nik" name="nik" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="nomor_hp" class="form-label">No. Hp</label>
                                        <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="foto_sim" class="form-label">Foto SIM</label>
                                    <input type="text" class="form-control" id="foto_sim" name="foto_sim" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary tombol-aksi">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>