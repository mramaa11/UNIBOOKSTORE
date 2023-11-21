<html>
    <div>
        <form method="POST" action="<?= base_url('Home/CariBuku'); ?>" id="form1">
        <text>Cari Buku</text>
                <input class="form-control" type="text" id="cari" name="cari">
                <button type="submit" > cari </button>
            </div>

    <table class="table table-striped table-bordered">
    <thead class="table-primary">
        <td> ID Buku </td>
        <td> Kategori </td>
        <td> Nama Buku </td>
        <td> Harga </td>
        <td> Stok </td>
        <td> Penerbit </td>
    </thead>
    <tr>
        <?php foreach ($buku as $value) : ?>
        <td> <?= $value['id_buku'] ?> </td>
        <td> <?= $value['kategori'] ?> </td>
        <td> <?= $value['nama_buku'] ?> </td>
        <td> <?= $value['harga'] ?> </td>
        <td> <?= $value['stok'] ?> </td>
        <td> <?= $value['nama_penerbit'] ?> </td>
    </tr>
    <?php endforeach ?>
</table>

</html>