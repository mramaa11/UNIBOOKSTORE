<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Data Buku - <?= $subjudul; ?> </h3>
            </div>
            <div class="card-body">
            <?php if($buku == null){
                echo '<div class="alert alert-success" role="alert">';
                echo 'Stok buku masih cukup';
                echo '</div>';

            ?>   
            <?php }else{
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Stok buku tersisa sedikit, silahkan ajukan pengadaan buku dibawah ini :';
            echo '</div>';
            ?>
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
            <?php }?>


</div>
</div>
</div>
