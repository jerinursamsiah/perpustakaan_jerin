<?php 
    include "../../config/koneksi.php";

   
    $id_pegawai                 = $_POST['id_pegawai'];
    $username                   = $_POST['username'];
    $kata_sandi                 = $_POST['kata_sandi'];
    $tingkatan                  = $_POST['tingkatan'];
    
   


    $sql = "update tabel_user set
    
        id_pegawai              = '".$id_pegawai."',
        username                = '".$username."',
        kata_sandi              = '".$kata_sandi."',
        tingkatan               = '".$tingkatan."'
        
      
        where id_user = '".$id_user."'
        ";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=user');

?>

