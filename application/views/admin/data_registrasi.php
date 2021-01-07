

      <!-- Main Content -->
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
                                 <a href="<?= base_url() ?>registrasi_user/cetak_data" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a>  
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Registrasi</th>
                                                <th>Token Registrasi</th>
                                                <th>Full Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Registrasi</th>
                                                <th>Token Registrasi</th>
                                                <th>Full Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($registrasi_user as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_registrasi'] ?></td>
                                                <td><?= $data['token_registrasi'] ?></td>
                                                <td><?= $data['full_name'] ?></td>
                                                <td><?= $data['phone_number'] ?></td>
                                                <td><?= $data['email'] ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>registrasi_user/hapus_registrasi?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                    
                                                    <a href="<?= base_url() ?>registrasi_user/edit_registrasi?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>

                                                    <a href="#" type="button" class="btn btn-success"  data-toggle="modal" data-target="#mymodal<?= $data['id'] ?>"> <i class="fas fa-eye"></i></a>


                                              
                                            </tr>


         <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>

                                            <!-- Modal -->
<div class="modal fade" id="mymodal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Registrasi User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
     
       <b>Kode Registrasi</b><p><?= $data['kd_registrasi'] ?></p> 
       <hr>
        <b>Token Registrasi</b> <p><?= $data['token_registrasi'] ?></p> 
        <hr>
        <b>Full Name</b> <p><?= $data['full_name'] ?></p> 
        <hr>
        <b>Phone Number</b> <p><?= $data['phone_number'] ?></p> 
        <hr>
        <b>Email</b> <p><?= $data['email'] ?></p> 
        <hr>
        <!-- <b>Password</b> <p><?= $data['password'] ?></p>  -->
        <hr>
        <b>Waktu Registrasi</b> <p><?= $data['waktu_registrasi'] ?></p> 
        <hr>
         <b>Referall Code</b> <p><?= $data['referall_code'] ?></p>
         <hr> 
         <b>Status Aktifasi</b> <p><?= $data['status_aktivasi'] ?></p> 
         <hr>
         <b>Waktu Aktifasi</b> <p><?= $data['waktu_aktivasi'] ?></p> 





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>



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
          2.3.0
        </div>
      </footer>
    </div>
  </div>



