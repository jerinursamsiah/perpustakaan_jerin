
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data User</h4>
                        <br>
                        <form action="model/user/prosesadduser.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Id Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai"></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="username" id="username"></td>
                                </tr>
                                <tr>
                                    <td>Kata Sandi</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="kata_sandi" id="kata_sandi"></td>
                                </tr>
                                <tr>
                                    <td>Tingkatan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="tingkatan" id="tingkatan"></input></td>
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