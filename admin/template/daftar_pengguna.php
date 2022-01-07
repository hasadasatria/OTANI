<?php
    $username = $_SESSION['username'];
    $data = read("user", "WHERE username='$username'");
    while($data2 = mysqli_fetch_array($data)){
    if($data2['role'] != 1){
        echo "<script>alert('Please login as ADMIN to continue!')</script>";
        echo "<script>location='index.php';</script>";
    } else{
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $data = read("user", "WHERE role=0");
                                            while($data2 = mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $data2['username'] ?></td>
                                            <td><?php echo $data2['password'] ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-primary" href="index.php?page=edit_pengguna&id=<?php echo $data2['id_user'] ?>">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
                                                    <a class="btn btn-danger" href="../admin/proses.php?status=hapus_pengguna&id=<?php echo $data2['id_user'] ?>">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<?php }} ?>