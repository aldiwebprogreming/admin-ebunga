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
                      <form method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-8 col-lg-8">
                            

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Article</label>
                             <input type="text" name="kd_article" class="form-control" placeholder="Masukan kode artticle blog" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Title</label>
                              <input type="text" name="title" placeholder="Masukan title blog" class="form-control" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Sub Title</label>
                                <textarea class="form-control" placeholder="Masukan sub title" required="" name="sub_title"></textarea>
                            </div>

                            

                            <div class="mb-3">
                              <label for="" class="form-label">Isi</label>
                                  <textarea class="form-control" placeholder="Mausukan isi blog" required="" name="isi"></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Date Publish</label>
                                  <input type="date" class="form-control" name="date_publish" required="" name="date_publish">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Publish</label>
                                  <input type="text" class="form-control" name="publish" required="" placeholder="Masukan publish" name="publish">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kategori</label>
                                <input type="text" class="form-control" name="kategori" required="" placeholder="Masukan Kategori">
                            </div>



                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
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
              
