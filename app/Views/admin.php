<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Data Buku<?= $subjudul; ?> </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#tambah-data"><i class="fas fa-plus"></i>Tambah Data</i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h5>
                </div>';
            }
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                    <td> ID Buku </td>
        <td> Kategori </td>
        <td> Nama Buku </td>
        <td> Harga </td>
        <td> Stok </td>
        <td> Penerbit </td>
        <td> AKSI </td>
        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $value) :?>
                        <tr>
                        <td> <?= $value['id_buku'] ?> </td>
        <td> <?= $value['kategori'] ?> </td>
        <td> <?= $value['nama_buku'] ?> </td>
        <td> <?= $value['harga'] ?> </td>
        <td> <?= $value['stok'] ?> </td>
        <td> <?= $value['nama_penerbit'] ?> </td>
        <td>
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#ubah-data<?= $value['id_buku']; ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#hapus-data<?= $value['id_buku']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="modal fade" id="tambah-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data <?= $subjudul; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/tambah')?>" method="POST">
                <div class="form-group mb-0">
                    <label for="ID Buku">ID Buku</label>
                    <input type="text" name="id_buku" id="id_buku" class="form-control" placeholder="Masukan ID Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Kategori">Kategori</label>
                    <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Masukan Kategori Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Nama Buku">Alamat</label>
                    <input type="text" name="nama_buku" id="nama_buku" class="form-control" placeholder="Masukan Nama Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="harga">Kota</label>
                    <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukan Harga">
                </div>
                <div class="form-group mb-0">
                    <label for="Stok">Telepon</label>
                    <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukan stok">
                </div>
                <div class="form-group mb-0">
                    <label for="Penerbit">Penerbit</label>
                    <input type="text" name="nama_penerbit" id="nama_penerbit" class="form-control" placeholder="Masukan Penerbit">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">close</button>
                <button type="submit">Simpan data</button>
            </div>
        </form>
        </div>
        </div>
        </div>

        <?php foreach ($buku as $value) : ?>
        <div class="modal fade" id="ubah-data<?= $value['id_buku']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data <?= $subjudul; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/ubah/' . $value['id_buku'])?>" method="POST">
                <div class="form-group mb-0">
                    <label for="ID Buku">ID Buku</label>
                    <input type="text" name="id_buku" id="id_buku" value="<?= $value['id_buku']; ?>" class="form-control" placeholder="Masukan ID Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Kategori">Kategori</label>
                    <input type="text" name="kategori" id="kategori" value="<?= $value['kategori']; ?>" class="form-control" placeholder="Masukan Kategori Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Nama Buku">Nama Buku</label>
                    <input type="text" name="nama_buku" id="nama_buku" value="<?= $value['nama_buku']; ?>" class="form-control" placeholder="Masukan Nama Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Harga">Harga</label>
                    <input type="text" name="harga" id="harga" value="<?= $value['harga']; ?>" class="form-control" placeholder="Masukan Harga">
                </div>
                <div class="form-group mb-0">
                    <label for="Stok">Stok</label>
                    <input type="text" name="stok" id="stok" value="<?= $value['stok']; ?>" class="form-control" placeholder="Masukan Stok">
                </div>
                <div class="form-group mb-0">
                    <label for="Penerbit">Penerbit</label>
                    <input type="text" name="nama_penerbit" id="nama_penerbit" value="<?= $value['nama_penerbit']; ?>" class="form-control" placeholder="Masukan Penerbit">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">close</button>
                <button type="submit">Ubah data</button>
            </div>
        </form>
        </div>
        </div>
        </div>
        <?php endforeach ?>

        <!-- /.modal-HapusData -->
<?php foreach ($buku as $value) : ?>
    <!-- Modal Hapus Data -->
    <div class="modal fade" id="hapus-data<?= $value['id_buku']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data <?= $subjudul; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Data Yakin Akan Dihapus <?= $value['id_buku']; ?>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('Admin/hapus/' . $value['id_buku']) ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php endforeach; ?>


<!-- Data Penerbit -->

<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Data Penerbit<?= $subjudul; ?> </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#tambah-datap"><i class="fas fa-plus"></i>Tambah Data</i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesanp')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesanp');
                echo '</h5>
                </div>';
            }
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                    <td> ID Penerbit </td>
        <td> Nama </td>
        <td> Alamat </td>
        <td> Kota </td>
        <td> Telepon </td>
        <td> AKSI </td>
        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($penerbit as $value) :?>
                        <tr>
                        <td> <?= $value['id_penerbit'] ?> </td>
        <td> <?= $value['nama_penerbit'] ?> </td>
        <td> <?= $value['alamat'] ?> </td>
        <td> <?= $value['kota'] ?> </td>
        <td> <?= $value['telepon'] ?> </td>
        <td>
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#ubah-datap<?= $value['id_penerbit']; ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#hapus-datap<?= $value['id_penerbit']; ?>"><i class="fas fa-trash"></i></button>
                    <?php
                    endforeach;
                    ?>
                            </td>
                        </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="modal fade" id="tambah-datap">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data <?= $subjudul; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/tambahp')?>" method="POST">
                <div class="form-group mb-0">
                    <label for="ID Penerbit">ID Penerbit</label>
                    <input type="text" name="id_penerbit" id="id_penerbit" class="form-control" placeholder="Masukan ID Penerbit">
                </div>
                <div class="form-group mb-0">
                    <label for="Nama Penerbit">Kategori</label>
                    <input type="text" name="nama_penerbit" id="nama_penerbit" class="form-control" placeholder="Masukan Nama Penerbit">
                </div>
                <div class="form-group mb-0">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat">
                </div>
                <div class="form-group mb-0">
                    <label for="Kota">Kota</label>
                    <input type="text" name="kota" id="kota" class="form-control" placeholder="Masukan Kota">
                </div>
                <div class="form-group mb-0">
                    <label for="Telepon">Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Masukan Telepon">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">close</button>
                <button type="submit">Simpan data</button>
            </div>
        </form>
        </div>
        </div>
        </div>

        <?php foreach ($penerbit as $value) : ?>
        <div class="modal fade" id="ubah-datap<?= $value['nama_penerbit']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data <?= $subjudul; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/ubahp/' . $value['nama_penerbit'])?>" method="POST">
                <div class="form-group mb-0">
                    <label for="ID Penerbit">ID Penerbit</label>
                    <input type="text" name="id_penerbit" id="id_penerbit" value="<?= $value['id_penerbit']; ?>" class="form-control" placeholder="Masukan ID Penerbit">
                </div>
                <div class="form-group mb-0">
                    <label for="Nama Penerbit">Nama Penerbit</label>
                    <input type="text" name="nama_penerbit" id="nama_penerbit" value="<?= $value['nama_penerbit']; ?>" class="form-control" placeholder="Masukan Nama Penerbit">
                </div>
                <div class="form-group mb-0">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?= $value['alamat']; ?>" class="form-control" placeholder="Masukan Alamat">
                </div>
                <div class="form-group mb-0">
                    <label for="Kota">Kota</label>
                    <input type="text" name="kota" id="kota" value="<?= $value['kota']; ?>" class="form-control" placeholder="Masukan Kota">
                </div>
                <div class="form-group mb-0">
                    <label for="Telepon">Telepon</label>
                    <input type="text" name="telepon" id="telepon" value="<?= $value['telepon']; ?>" class="form-control" placeholder="Masukan Telepon">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">close</button>
                <button type="submit">Ubah data</button>
            </div>
        </form>
        </div>
        </div>
        </div>
        <?php endforeach ?>

        <!-- /.modal-HapusData -->
<?php foreach ($penerbit as $value) : ?>
    <!-- Modal Hapus Data -->
    <div class="modal fade" id="hapus-datap<?= $value['nama_penerbit']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data <?= $subjudul; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Data Yakin Akan Dihapus <?= $value['nama_penerbit']; ?>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('Admin/hapusp/' . $value['nama_penerbit']) ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php endforeach; ?>
            