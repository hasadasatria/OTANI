<?php 
    $connect = new mysqli("localhost", "root", "", "db_sukasuka");

    function read($tabel, $query = ""){
        global $connect;
        $data = mysqli_query($connect, "SELECT * FROM $tabel $query");
        return $data;
    }

    function create_article(){
        global $connect;
        $nama = $_FILES["foto_produk"]["name"];
        mysqli_query($connect, "INSERT INTO produk VALUES('', '$_POST[judul]', '$_POST[isi]', '$nama')") or die(mysqli_error($connect));

        move_uploaded_file($_FILES['foto_produk']['tmp_name'], "../assets/img/produk/".$nama);
    

        echo "<script>alert('Produk berhasil di tambahkan')</script>";
        echo "<script>location='index.php';</script>";
    }

    function delete($tabel, $nama_id, $id, $tujuan){
        global $connect;
        mysqli_query($connect, "DELETE FROM $tabel WHERE $nama_id=$id") or die(mysqli_error($connect));
        
        echo "<script>alert('Berhasil dihapus')</script>";
        echo "<script>location='$tujuan';</script>";
    }

    function edit(){
        global $connect;
        $nama = $_FILES["foto_produk"]["name"];
        mysqli_query($connect, "UPDATE produk SET judul='$_POST[judul]', isi='$_POST[isi]', foto_produk='$nama' WHERE id_produk
        ='$_POST[id_produk]'") or die(mysqli_error($connect));
        move_uploaded_file($_FILES['foto_produk']['tmp_name'], "../assets/img/produk/".$nama);

        echo "<script>alert('produk berhasil di ubah')</script>";
        echo "<script>location='index.php';</script>";
    }


    function create_user(){
        global $connect;
        mysqli_query($connect, "INSERT INTO user VALUES('', '$_POST[username]', '$_POST[password]', '0')") or die(mysqli_error($connect));

        echo "<script>alert('Pengguna berhasil di tambahkan')</script>";
        echo "<script>location='index.php?page=pengguna';</script>";
    }
    
    function create_user2(){
        global $connect;
        mysqli_query($connect, "INSERT INTO user VALUES('', '$_POST[username]', '$_POST[password]', '0')") or die(mysqli_error($connect));

        echo "<script>alert('Register success!')</script>";
        echo "<script>location='login.php';</script>";
    }
    
    function edit_user(){
        global $connect;
        mysqli_query($connect, "UPDATE user SET username='$_POST[username]', password='$_POST[password]' WHERE id_user='$_POST[id_user]'") or die(mysqli_error($connect));

        echo "<script>alert('Pengguna berhasil di ubah')</script>";
        echo "<script>location='index.php?page=pengguna';</script>";
    }