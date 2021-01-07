   
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
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username" required="">
                                <?php echo form_error('username',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" name="nama_lengkap"  placeholder="Masukan nama lengakap" required="">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">No HP</label>
                              <input type="number" name="hp" class="form-control" required="">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                              <textarea class="form-control" name="alamat" placeholder="Masukan alamat" required=""></textarea>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Posisi</label>
                             <select class="form-control" name="posisi">
                              <option>-- Pilih Posisi --</option>
                               <option>Adamin</option>
                               <option>Super Admin</option>
                             </select>
                               
                            </div>

                          

                            <div class="mb-3">
                              <label for="" class="form-label">Bio</label>
                             <textarea class="form-control" name="bio" placeholder="Masukan biodata"></textarea>
                               
                            </div>


                           

                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="<?= base_url() ?>operator/data_operator" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
         </div>
       </section>
     </div>
                

                
