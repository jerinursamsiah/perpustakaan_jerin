<?php 
    include "../../config/koneksi.php";

   
    $id_pegawai              = $_POST['id_pegawai'];
    $username                = $_POST['username'];
    $kata_sandi              = $_POST['kata_sandi'];
    $tingkatan               = $_POST['tingkatan'];
    
    


    $sql = "INSERT INTO tabel_user
    (
        id_pegawai,
        username,
        kata_sandi,
        tingkatan
        
    ) 
    VALUES 
    (
        '".$id_pegawai."',
        '".$username."',
        '".$kata_sandi."',
        '".$tingkatan."'
        
        
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=user');

?>

