<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="row">
    <div class="col-lg-12 col-xxl-9 d-flex" style="font-size: 15px;">
        <div class="card flex-fill table-responsive pt-4 ps-3 pe-3 pb-1">
            <table class="table table-sm table-hover table-striped my-0 mb-4">
                <?php if (!empty($mobil)) : ?>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Plat</th>
                            <th class="d-none d-xl-table-cell text-center">Nama</th>
                            <th class="d-none d-xl-table-cell text-center">Merk</th>
                            <th class="d-none d-xl-table-cell text-center">Tahun</th>
                            <th class="d-none d-xl-table-cell text-center">Transmisi</th>
                            <th class="d-none d-xl-table-cell text-center">Harga</th>
                            <th class="d-none d-xl-table-cell text-center">Sopir + BBM</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $start; ?>
                        <?php foreach ($mobil as $mbl) : ?>
                            <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $mbl['nomor_plat']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $mbl['nama']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $mbl['merk']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $mbl['tahun']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $mbl['transmisi']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $mbl['harga']; ?>/jam</td>
                                <td class="d-none d-xl-table-cell text-center"><?= $mbl['paket']; ?></td>
                                <?php if ($mbl['status'] == 'tersedia') { ?>
                                    <td class="text-center"><span class="badge bg-success text-center"><?= $mbl['status']; ?></span></td>
                                <?php } else { ?>
                                    <td class="text-center"><span class="badge bg-danger text-center"><?= $mbl['status']; ?></span></td>
                                <?php } ?>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm rounded ubahModal" href="<?= base_url(); ?>mobil/edit/<?= $mbl['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalData" data-id="<?= $mbl['id']; ?>">Edit</button>
                                    <button class="btn btn-danger btn-sm rounded tombol-hapus" href="<?= base_url(); ?>mobil/hapus/<?= $mbl['id']; ?>">Hapus</button>
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
                <div class="col-md me-7"></div>
                <div class="col-md ms-7">
                    <button type="button" class="btn btn-primary tambahModal float-right" data-bs-toggle="modal" data-bs-target="#modalData">
                        Tambah Data Mobil
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Tambah Data Mobil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php base_url(); ?>mobil/tambah" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="nomor_plat" class="form-label">No. Plat</label>
                                        <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="tahun" name="tahun" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="harga" name="harga" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="paket" class="form-label">Paket</label>
                                        <input type="text" class="form-control" id="paket" name="paket" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="transmisi" class="form-label">Transmisi</label>
                                        <select class="form-select" id="transmisi" name="transmisi" required>
                                            <option selected>Pilih...</option>
                                            <option value="Manual">Manual</option>
                                            <option value="Automatic">Automatic</option>
                                            <option value="Manual/Automatic">Manual/Automatic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fotoMobil" class="form-label">Upload</label>
                                        <input type="file" class="form-control" id="fotoMobil" name="fotoMobil" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="kategori" class="form-label">Kode. Kategori</label>
                                        <select class="form-select" id="kategori" name="kategori" required>
                                            <option selected>Pilih...</option>
                                            <?php foreach ($kategori as $k) : ?>
                                                <option value="<?= $k['kode']; ?>"><?= $k['kode']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" id="status" name="status" required>
                                            <option selected>Pilih...</option>
                                            <option value="tersedia">Tersedia</option>
                                            <option value="tidak_tersedia">Tidak Tersedia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px" required></textarea>
                                <label for="deskripsi">Deskripsi..</label>
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