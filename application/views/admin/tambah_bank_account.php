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
                              <label for="" class="form-label">Kd Bank Account</label>
                              <input type="text" class="form-control" name="kd_bank_account"  placeholder="Masukan kode bank" required="">
                                <?php echo form_error('kd_bank_account',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Tipe User</label>
                             
                                  <select class="form-control" name="tipe_user">
                                    <option>-- Pilih tipe user --</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                  </select>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Id User</label>
                                  <input type="text" class="form-control" name="id_user"  placeholder="Masukan id user" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Bank</label>
                                  <input type="text" class="form-control" name="kd_bank"  placeholder="Masukan kode bank" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Account Name</label>
                                  <input type="text" class="form-control" name="account_name"  placeholder="Masukan account name " required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Account Number</label>
                                  <input type="text" class="form-control" name="account_number"  placeholder="Masukan account number " required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Main</label>
                                  <input type="number" class="form-control" name="main"  placeholder="Masukan main" required="" maxlength="1" min="0">
                            </div>

                           <!--  <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                                  <input type="number" class="form-control" name="active"  placeholder="Active" required="" maxlength="1" min="0">
                            </div> -->

                           



                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="<?= base_url() ?>bank_account/data_bank_account" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                
                </div>
            </div>
          </div>
        </section>
      </div>
