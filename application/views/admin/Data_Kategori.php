<div class="flash-data-kategori" data-flashdata="<?= $this->session->flashdata('flashData'); ?>"></div>
<div class="row">
    <div class="col-lg-12 col-xxl-9 d-flex" style="font-size: 15px;">
        <div class="card flex-fill table-responsive pt-4 ps-3 pe-3 pb-1">
            <table class="table table-sm table-hover table-striped my-0 mb-4">
                <?php if (!empty($kategori)) : ?>

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th class="d-none d-xl-table-cell text-center">Jenis Kendaraan</th>
                            <th class="d-none d-xl-table-cell text-center">Merk</th>
                            <th class="d-none d-xl-table-cell text-center">Jumlah Unit</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $start; ?>
                        <?php foreach ($kategori as $ktr) : ?>
                            <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $ktr['kode_kategori']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $ktr['jenis_kendaraan']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $ktr['merk']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $ktr['jumlah']; ?></td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm rounded ubahKategori" href="<?= base_url(); ?>kategori/edit/<?= $ktr['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalKategori" data-id="<?= $ktr['id']; ?>">Edit</button>
                                    <button class="btn btn-danger btn-sm rounded tombol-hapus-kategori" href="<?= base_url(); ?>kategori/hapus/<?= $ktr['id']; ?>">Hapus</button>
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
                <div class="col-md">
                    <?php echo $this->pagination->create_links(); ?></ </div>
                </div>
                <div class="col-md me-4"></div>
                <div class="col-md me-6"></div>
                <div class="col-md ms-6">
                    <button type="button" class="btn btn-primary tambahDataKategori float-right" data-bs-toggle="modal" data-bs-target="#modalKategori">
                        Tambah Data Kategori
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalKategori" tabindex="-1" aria-labelledby="judulModalKategori" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModalKategori">Tambah Data Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php base_url(); ?>kategori/tambah" method="post" enctype="multipart/form-data" class="formKategori">
                            <input type="hidden" name="id">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="kode_kategori" class="form-label">Kode Kategori</label>
                                        <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                                        <select class="form-select" id="jenis_kendaraan" name="jenis_kendaraan" required>
                                            <option selected>Pilih...</option>
                                            <option value="Roda 4">Roda 4</option>
                                            <option value="Roda 2">Roda 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="merk" class="form-label">Merk</label>
                                        <input type="text" class="form-control" id="merk" name="merk" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="jumlah_unit" class="form-label">Jumlah</label>
                                        <input type="number" class="form-control" id="jumlah_unit" name="jumlah_unit" required>
                                    </div>
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