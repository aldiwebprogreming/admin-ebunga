                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Type</th>
                                                <th>Last Login</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                                <th style="display: none;">Active</th>
                                                <th style="display: none;">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Type</th>
                                                <th>Last Login</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($user as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= $data['type'] ?></td>
                                                  <!--  <td><?= $data['password'] ?></td> -->
                                                <td><?= $data['last_login'] ?></td>
                                                 <td><?= $data['active'] ?></td>
                                                <td>
                                                    
                                                     <a href="<?= base_url() ?>user/hapus_user?id=<?= $data['id'] ?>" class="btn btn-danger"  onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                    <a href="<?= base_url() ?>user/edit_user?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                                </td>
                                              
                                            </tr>

                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>