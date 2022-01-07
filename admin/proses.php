<?php
    session_start();
    include '../koneksi.php';

    if($_GET['status'] == 'buat_produk'){
        create_article();
    } else if($_GET['status'] == 'hapus_produk'){
        delete("produk", "id_produk", "$_GET[id]", "index.php");
    } else if($_GET['status'] == 'edit_produk'){
        edit();
    } else if($_GET['status'] == 'hapus_pengguna'){
        delete("user", "id_user", "$_GET[id]", "index.php?page=pengguna");
    } else if($_GET['status'] == 'tambah_pengguna'){
        create_user();
    } else if($_GET['status'] == 'edit_pengguna'){
        edit_user();
    } else if($_GET['status'] == 'tambah_pengguna2'){
        create_user2();
    } else if($_GET['status'] == 'logout'){
        session_destroy();
        echo "<script>location='login.php';</script>";
    }