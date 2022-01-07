
<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3 bg-warning">
                            <h6 class="m-0 font-weight-bold text-dark">Tambah Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Foto produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $data = read("produk");
                                            while($data2 = mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $data2['judul'] ?></td>
                                            <td><textarea id="w3review" name="w3review" rows="4" cols="50"><?php echo $data2['isi'] ?></textarea></td>
                                            <td><img height="105px" width="150px" src="../assets/img/produk/<?php echo $data2['foto_produk'] ?>"></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-primary" href="index.php?page=edit_produk&id=<?php echo $data2['id_produk'] ?>">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
                                                    <a class="btn btn-danger" href="../admin/proses.php?status=hapus_produk&id=<?php echo $data2['id_produk'] ?>">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>