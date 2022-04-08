<?php
    @$id = $_GET['id'];

    $sql    = "select * from tabel_user where id_user =$id";
    $show   = $db->query($sql);
    $hasil  = mysqli_fetch_assoc($show);

    $id_user    = $hasil['id_user'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit User</h4>
                        <br>
                        <form action="model/user/prosesedituser.php" method="POST">
                            <input type="hidden" name="id_user" value="<?php echo $hasil['id_user'] ?>">

                            <table class="table">
                                <tr>
                                    <td>Id Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai" value="<?php echo $hasil['id_pegawai']?>"></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="username" id="username" value="<?php echo $hasil['username']?>"></td>
                                </tr>
                               
                                <tr>
                                    <td>Kata Sandi</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="kata_sandi" id="kata_sandi" value="<?php echo $hasil['kata_sandi']?>"></td>
                                </tr>
                                <tr>
                                    <td>Tingkatan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="tingkatan" id="id_buku" value="<?php echo $hasil['tingkatan']?>"></td>
                                </tr>
                                
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-dark" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>