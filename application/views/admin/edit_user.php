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


                          <?php foreach ($edit_user as $data ) {
                            
                          } ?>
                                
                    <div class="card-body">
                     <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username anda" required="" value="<?= $data['username'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Type</label>
                              <select class="form-control" name="type">
                                <option><?= $data['type'] ?></option>

                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Password Baru</label>
                              <input type="password" class="form-control" name="pass"  placeholder="Masukan password anda" required="" minlength="3" value="">
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
                                <a href="<?= base_url() ?>user/data_user" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                     </div>
          
                </div>
              </div>
            </div>
          </section>
        </div>
