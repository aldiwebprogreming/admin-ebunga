
                
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



                              <?php foreach ($registrasi as $data) {
                                # code...
                              } ?>
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Registrasi</label>
                              <input type="text" class="form-control" name="kd_registrasi"  required="" value="<?= $data['kd_registrasi'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Token Registrasi</label>
                              <input type="text" class="form-control" name="token_registrasi"  required="" value="<?= $data['token_registrasi'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="full_name"  required="" value="<?= $data['full_name'] ?>">
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Phone Number</label>
                              <input type="number" class="form-control" name="phone_number"   required="" value="<?= $data['phone_number'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email"  required="" value="<?= $data['email'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Password Baru</label>
                              <input type="password" class="form-control" name="kode_post"  required="" placeholder="Masukan password baru">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Waktu Registrasi</label>
                              <input type="datetime-local" class="form-control" name="waktu_registrasi"  required="" value="<?= $data['waktu_registrasi'] ?>">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Referall Code</label>
                              <input type="text" class="form-control" name="referall_code"   required="" value="<?= $data['referall_code'] ?>">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Status Aktivasi</label>
                              <input type="text" class="form-control" name="status_aktivasi" required="" value="<?= $data['status_aktivasi'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Waktu Aktivasi</label>
                              <input type="datetime-local" class="form-control" name="waktu_aktivasi"   required="" value="<?= $data['waktu_aktivasi'] ?>">
                            </div>

                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>registrasi_user/data_registrasi" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
                         
          
               </div>
             </div>
             </div>
           </section>
         </div>

