
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php foreach ($pelanggan as $data) { ?>

                                                <tr>
                                                    <td><?= $data['full_name'] ?></td>
                                                     <td><?= $data['email'] ?></td>
                                                     <td><?= $data['phone'] ?></td>
                                                     
                                                </tr>

                                            <?php } ?>
                                           
                                        </tbody>
                                    </table>