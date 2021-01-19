

    <div class="preloader">
      <div class="loading">
        <img src="<?= base_url()?>loading/load1.gif" width="80">
     
      </div>
    </div>

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
                                 <a href="<?= base_url() ?>bank_account/tambah_bank_account" class ="btn btn-primary mb-4"> Tambah Bank Account</a> 

                                  <a href="<?= base_url() ?>bank_account/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 


                                    <a href="<?= base_url() ?>bank_account/cetak_excel" id="" class ="btn btn-success mb-4" ><i class="fas fa-file-excel"></i> Cetak Excel</a> 


                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Bank Account</th>
                                                <th>Tipe User</th>
                                                <th>Id User</th>
                                                <th>Kd Bank</th>
                                                <th>Account Name</th>
                                                <!--  <th>Account Number</th>
                                                 <th>Main</th>
                                                  <th>Active</th> -->
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Bank Account</th>
                                                <th>Tipe User</th>
                                                <th>Id User</th>
                                                <th>Kd Bank</th>
                                                <th>Account Name</th>
                                               <!--  <th>Account Number</th>
                                                <th>Main</th>
                                                <th>Active</th> -->
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($bk_account as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_bank_account'] ?></td>
                                                <td><?= $data['tipe_user'] ?></td>
                                                <td><?= $data['id_user'] ?></td>
                                                <td><?= $data['kd_bank'] ?></td>
                                                <td><?= $data['account_name'] ?></td>
                                                <td>

                                                     <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">
                                                    <a href="<?= base_url() ?>bank_account/hapus_bk_account?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                      </span>

                                                   <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                                    <a href="<?= base_url() ?>bank_account/edit_bk_account?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                                  </span>

                                                     <span class="d-inline-block" data-toggle="tooltip" data-title="Detail">
                                                   <a href="<?= base_url() ?>bank_account/detail?id=<?= $data['id'] ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                 </span>
                                                
                                            </tr>

                                            <!-- Modal -->



                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
     
        </div>
      </footer>
    </div>
  </div>

<script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>