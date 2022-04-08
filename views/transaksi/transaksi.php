
               
                <div class="container-fluid">

<!-- Page Heading -->


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data Transaksi
        <a href="beranda.php?page=transaksi&aksi=add">
            <button class="btn btn-dark">Tambah Data Transaksi</button>
        </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                       
                        <th>Tanggal Transaksi</th>
                        <th>Id Anggota</th>
                        <th>Id Pegawai</th>
                        <th>Id Buku</th>
                        <th>Quantity</th>
                        <th>Jenis Transaksi</th>
                        <th>Aksi </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tanggal Transaksi</th>
                        <th>Id Anggota</th>
                        <th>Id Pegawai</th>
                        <th>Id Buku</th>
                        <th>Quantity</th>
                        <th>Jenis Transaksi</th>
                        <th>Aksi </th>
                    </tr>
                    </tfoot>
                <tbody>
                <?php
                                                
                                                $sql = "select * from tabel_transaksi";
                                                $show = $db->query($sql);


                    $show = $db->query($sql);
                    foreach($show as $transaksi):
                ?>
                    <tr>
                    <tr>
                        
                        <td><?php echo $transaksi['tanggal_transaksi']?></td>
                        <td><?php echo $transaksi['id_anggota']?></td>
                        <td><?php echo $transaksi['id_pegawai']?></td>
                        <td><?php echo $transaksi['id_buku']?></td>
                        <td><?php echo $transaksi['quantity']?></td>
                        <td><?php echo $transaksi['jenis_transaksi']?></td>
                        <td>
                            <a href="beranda.php?page=transaksi&aksi=edit&id=<?php echo $transaksi['id_transaksi']?>"
                            class="btn btn-dark btn-circle">
                                    <i class="fas fa-edit"></i>
                                    </a>
                            <a href="model/transaksi/prosesdeletetransaksi.php?id=<?php echo $transaksi['id_transaksi']?>"
                            class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                    </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

