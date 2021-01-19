
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


                        <?php foreach ($operator as $data) {
                       
                        } ?>        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                                

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Username</strong></label>
                             <p><?= $data['username'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Lengkap</strong></label>
                             <p><?= $data['nama_lengkap'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nomor Hp</strong></label>
                               <p><?= $data['hp'] ?></p>
                            </div>
                            <hr>
                            

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat</strong></label>
                                  <p><?= $data['alamat'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Posisi</strong></label>
                                 <p><?= $data['posisi'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Bio</strong></label>
                                  <p><?= $data['bio'] ?></p>
                            </div>
							<hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                               <p><?= $data['active'] ?></p>
                            </div>
                            <hr>


                            <div class="mb-3">
                             
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
              
