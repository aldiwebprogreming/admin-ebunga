 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $sub_title; ?></h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?= $sub_title ?></h4>
                  </div>       
                                
                                <div class="card-body">
                                 <a href="<?= base_url() ?>Branch_seller/tambah_branch" class ="btn btn-primary mb-4"> Tambah Branc Seller</a> 

                                  <a href="<?= base_url() ?>branch_seller/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Branch</th>
                                                <th>Nama Branch</th>
                                                <th>Id seller</th>
                                                <th>Alamat</th>
                                                <th>Phone</th>
                                                 <th>Status Branch</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Branch</th>
                                                <th>Nama Branch</th>
                                                <th>Id seller</th>
                                                <th>Alamat</th>
                                                <th>Phone</th>
                                                 <th>Status Branch</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($branch as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_branch'] ?></td>
                                                <td><?= $data['nama_branch'] ?></td>
                                                <td><?= $data['id_seller'] ?></td>
                                                <td><?= $data['alamat'] ?></td>
                                                <td><?= $data['phone'] ?></td>
                                                <td>
                                                    <?php
                                                      if ($data['status_branch'] == 'active') { ?>
                                                         <a href="<?= base_url() ?>branch_seller/status_branch_seller?id=<?= $data['id'] ?>" class="badge rounded-pill btn btn-primary" onclick="return confirm('Apakah ingin mendisable branch seller ini ?')"><?= $data['status_branch'] ?></a>
                                                    <?php } else { ?>

                                                       <a href="<?= base_url() ?>branch_seller/status_branch_seller?id=<?= $data['id'] ?>" class="badge rounded-pill btn btn-danger" onclick="return confirm('Apakah ingin mengactive kan branch seller ini ?')"><?= $data['status_branch'] ?></a>
                                                     <?php } ?>
                                                 </td>
                                                <td>
                                                    <a href="<?= base_url() ?>branch_seller/hapus_branch?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>

                                              <a href="<?= base_url() ?>branch_seller/edit_branch?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>

                                                  <a href="<?= base_url() ?>branch_seller/detail?id=<?= $data['id'] ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>


                                              
                                            </tr>

                                            <!-- Modal -->



                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      
                        </div>
                </main>



                  </div>
                </div>

            </div>
           
         
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
         <!--  Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> -->
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
