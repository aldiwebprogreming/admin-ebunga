<div class="main-content">
        <section class="section">
          <div class="section-header">
              <?php foreach ($user as $data) {
                         
                        } ?>   
          <h4><i class="fas fa-user" style="font-size: 30px; color: #8A2BE2;"></i> Detail User <?= $data['username'] ?></h4>
          </div>
          
             

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                  
                  </div>

                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Username</strong></label>
                             <p><?= $data['username'] ?></p>
                               
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Tyep</strong></label>
                            
                                    <p><?= $data['type'] ?></p>
        
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Last Login</strong></label>
                                  <p><?= $data['last_login'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                                <p><?= $data['active'] ?></p>
                            </div>
                            <hr>



                            <div class="mb-3">
                                
                                <a href="<?= base_url() ?>User/data_user" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
          </div>
        </section>
      </div>