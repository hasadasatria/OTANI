<?php
    $username = $_SESSION['username'];
    $data = read("user", "WHERE username='$username'");
    while($data2 = mysqli_fetch_array($data)){
    if($data2['role'] != 1){
        echo "<script>alert('Please login as ADMIN to continue!')</script>";
        echo "<script>location='index.php';</script>";
    } else{
?>
<form action="../admin/proses.php?status=edit_pengguna" method="POST">
    <?php
        $no = 1;
        $id = $_GET['id'];
        $data = read("user", "WHERE id_user=$id");
        while($data2 = mysqli_fetch_array($data)){
    ?>
    <input type="hidden" value="<?php echo $data2['id_user'] ?>" name="id_user">
    <div class="form-group">
        <label>Username</label>
        <input name="username" type="text" class="form-control" value="<?php echo $data2['username'] ?>">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input name="password" type="text" class="form-control" value="<?php echo $data2['password'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Ubah video</button>
    <?php } ?>
</form>

<?php }} ?>