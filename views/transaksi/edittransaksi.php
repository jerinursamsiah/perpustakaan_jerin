<?php
    @$id = $_GET['id'];

    $sql    = "select * from tabel_transaksi where id_transaksi =$id";
    $show   = $db->query($sql);
    $hasil  = mysqli_fetch_assoc($show);

    $id_transaksi    = $hasil['id_transaksi'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Transaksi</h4>
                        <br>
                        <form action="model/transaksi/prosesedittransaksi.php" method="POST">
                            <input type="hidden" name="id_transaksi" value="<?php echo $hasil['id_transaksi'] ?>">

                            <table class="table">
                                <tr>
                                    <td>Tanggal Transaksi</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" value="<?php echo $hasil['tanggal_transaksi']?>"></td>
                                </tr>
                                <tr>
                                    <td>Id Anggota</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="id_anggota" id="id_anggota "value="<?php echo $hasil['id_anggota']?>"></td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Id Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai" value="<?php echo $hasil['id_pegawai']?>"></td>
                                </tr>
                                <tr>
                                    <td>Id Buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_buku" id="id_buku" value="<?php echo $hasil['id_buku']?>"></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="quantity" id="quantity" value="<?php echo $hasil['quantity']?>"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Transaksi</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_transaksi" id="jenis_transaksi">
                                            <option value="pinjam">Pinjam</option>
                                            <option value="kembali">Kembali</option>
                                        </select>
                                    </td>
                                </tr>
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