<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->


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



                        <?php foreach ($bk_account as $data) {
                         
                        } ?>      
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Bank Account</label>
                              <input type="text" class="form-control" name="kd_bank_account"  placeholder="Masukan kode promo" required="" value="<?= $data['kd_bank_account'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Tipe User</label>
                             
                                  <select class="form-control" name="tipe_user">
                                    <option><?= $data['tipe_user'] ?></option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                  </select>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Id User</label>
                                  <input type="text" class="form-control" name="id_user"  placeholder="Masukan kode user" required="" value="<?= $data['id_user'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Bank</label>
                                  <input type="text" class="form-control" name="kd_bank"  placeholder="Masukan kode bank" required="" value="<?= $data['kd_bank'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Account Name</label>
                                  <input type="text" class="form-control" name="account_name"  placeholder="Masukan account name " required="" value="<?= $data['account_name'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Account Number</label>
                                  <input type="text" class="form-control" name="account_number"  placeholder="Masukan account number " required="" value="<?= $data['account_number'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Main</label>
                                  <input type="number" class="form-control" name="main"  placeholder="Masukan main" required="" maxlength="1" min="0" value="<?= $data['main'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                                <select class="form-control" name="active">
                                  <?php 

                                      if ($data['active'] == 1) {
                                        echo "<option value='1'>Y</option>";
                                         echo "<option value='0'>N</option>";
                                      } else {
                                        echo "<option value='0'>N</option>";
                                           echo "<option value='1'>Y</option>";
                                         
                                      }

                                   ?>
                                </select>
                            </div>

                           



                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
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