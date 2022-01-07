<form action="../admin/proses.php?status=buat_produk" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama produk</label>
        <input name="judul" type="text" class="form-control" placeholder="Masukan judul produk...">
    </div>
    <div class="form-group">
        <label>Isi produk</label>
        <textarea name="isi" class="form-control"rows="3"></textarea>
    </div>
    <div class="form-group">
        <label>Foto produk</label>
        <input type="file" class="form-control-file" name="foto_produk">
    </div>
    <button type="submit" class="btn btn-primary">Buat produk</button>
</form>