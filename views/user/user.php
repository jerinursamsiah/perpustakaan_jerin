
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Tabel User
                            <a href="beranda.php?page=user&aksi=add">
                                <button class="btn btn-dark">Tambah Data User</button>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Pegawai</th>
                                            <th>Username</th>
                                            <th>Kata Sandi</th>
                                            <th>Tingkatan</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Pegawai</th>
                                            <th>User Name</th>
                                            <th>Kata Sandi</th>
                                            <th>Tingkatan</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $sql = "select * from tabel_user";
                                        $show = $db->query($sql);

                                        foreach($show as $user):
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $user['id_pegawai']?></td>
                                            <td><?php echo $user['username']?></td>
                                            <td><?php echo $user['kata_sandi']?></td>
                                            <td><?php echo $user['tingkatan']?></td>
                                            
                                            
                                            <td>
                                                    <a href="beranda.php?page=user&aksi=edit&id=<?php echo $user['id_user']?>"
                                                    class="btn btn-dark btn-circle">
                                                        <i class="fas fa-edit"></i>
                                                        </a>
                                                    <a href="model/user/prosesdeleteuser.php?id=<?php echo $user['id_user']?>"
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

                </div>