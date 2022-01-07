<form action="../admin/proses.php?status=edit_produk" method="POST" enctype="multipart/form-data">
    <?php
        $no = 1;
        $id = $_GET['id'];
        $data = read("produk", "WHERE id_produk=$id");
        while($data2 = mysqli_fetch_array($data)){
    ?>
    <input type="hidden" value="<?php echo $data2['id_produk'] ?>" name="id_produk">
    <div class="form-group">
        <label>Nama Produk</label>
        <input name="judul" type="text" class="form-control" value="<?php echo $data2['judul'] ?>">
    </div>
    <div class="form-group">
        <label>Isi produk</label>
        <textarea name="isi" class="form-control"rows="3"><?php echo $data2['isi'] ?></textarea>
    </div>
    <div class="form-group">
        <label>Foto produk</label>
        <input type="file" class="form-control-file" name="foto_produk" value="<?php echo $data2['foto_produk'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit Produk</button>
    <?php } ?>
</form>