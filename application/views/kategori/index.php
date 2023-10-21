<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="row">
    <div class="col-md-4">
        <h1 class="h3">Data Mobil</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xxl-9 d-flex" style="font-size: 15px;">
        <div class="card flex-fill table-responsive pt-4 ps-3 pe-3 pb-1">
            <div class="row">
                <div class="col-md-7">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Mobil.." id="keyword" name="keyword">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md"></div>
                <div class="col-md">
                    <button type="button" class="btn btn-primary tambahModal float-right" data-bs-toggle="modal" data-bs-target="#modalData">
                        Tambah Data Mobil
                    </button>
                </div>
            </div>
            <table class="table table-sm table-hover table-striped my-0 mb-4">
                <?php if (!empty($kategori)) : ?>

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Kategori</th>
                            <th class="d-none d-xl-table-cell text-center">Jenis Kendaraan</th>
                            <th class="d-none d-xl-table-cell text-center">Merk</th>
                            <th class="d-none d-xl-table-cell text-center">Jumlah</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($kategori as $ktr) : ?>
                            <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $ktr['kode_kategori']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $ktr['jenis_kendaraan']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $ktr['merk']; ?></td>
                                <td class="d-none d-xl-table-cell text-center"><?= $ktr['jumlah']; ?></td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm rounded ubahModal" href="<?= base_url(); ?>mobil/edit/<?= $ktr['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalData" data-id="<?= $ktr['id']; ?>">Edit</button>
                                    <button class="btn btn-danger btn-sm rounded tombol-hapus" href="<?= base_url(); ?>mobil/hapus/<?= $ktr['id']; ?>">Hapus</button>
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
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Tambah Data Mobil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php base_url(); ?>mobil/tambah" method="post">
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="nomor_plat" class="form-label">No. Plat</label>
                                        <input type="text" class="form-control" id="nomor_plat" name="nomor_plat">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="tahun" name="tahun">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="kategori" class="form-label">Kode. Kategori</label>
                                        <select class="form-select" id="kategori" name="kategori">
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
                                        <select class="form-select" id="status" name="status">
                                            <option selected>Pilih...</option>
                                            <option value="tersedia">Tersedia</option>
                                            <option value="tidak_tersedia">Tidak Tersedia</option>
                                        </select>
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