<?php
require 'config.php';

function login(){
    global $db;
    $user = $_POST['email'];
    $pass = md5($_POST['password']);
    $sql = "select from pengguna where email=$user OR username=$user";
    $stmt = $db->query($sql);
    if($stmt->fetch(PDO::FETCH_ASSOC)){
        $_SESSION['username'] = $user;
        header("location:index.php");
    }
    return $stmt->rowCount();
}

function register(){
    global $db;
    $nama = $_POST['user'];
    $email = $_POST['email'];
    $telp = $_POST['Telp'];
    $password = md5($_POST['password']);
    $sql = "insert pengguna values ('','$email','$password','$nama','$telp')";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
}


function barang(){
    global $db;
    $sql = "SELECT * from barang";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt;
}

function addBarang(){
    global $db;
    $nm_bar = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $desk = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    

    $sql = "insert barang values('','$nm_bar','$harga','$stok','$desk','$gambar')";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
}




?>