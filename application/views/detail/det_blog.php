
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


                        <?php foreach ($blog as $data) {
                       
                        } ?>        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                                

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Article</strong></label>
                             <p><?= $data['kd_article'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Title</strong></label>
                             <p><?= $data['title'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Sub Title</strong></label>
                               <p><?= $data['sub_title'] ?></p>
                            </div>
                            <hr>
                            

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Isi</strong></label>
                                  <p><?= $data['isi'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Date Publish</strong></label>
                                 <p><?= $data['date_publish'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Publish</strong></label>
                                  <p><?= $data['publish'] ?></p>
                            </div>
							<hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kategori</strong></label>
                               <p><?= $data['kategori'] ?></p>
                            </div>
                            <hr>


                            <div class="mb-3">
                             
                                <a href="<?= base_url() ?>blog/data_blog" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
       </div>
    </div>
  </div>
</section>
</div>
              
