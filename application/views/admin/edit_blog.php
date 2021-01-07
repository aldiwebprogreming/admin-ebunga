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


                        <?php foreach ($edit_blog as $data) {
                       
                        } ?>        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                                

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Article</label>
                             <input type="text" name="kd_article" class="form-control" placeholder="Masukan kode artticle blog" value="<?= $data['kd_article'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Title</label>
                              <input type="text" name="title" placeholder="Masukan title blog" class="form-control" value="<?= $data['title'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Sub Title</label>
                                <textarea class="form-control" placeholder="Masukan sub title" required="" name="sub_title"><?= $data['sub_title'] ?></textarea>
                            </div>

                            

                            <div class="mb-3">
                              <label for="" class="form-label">Isi</label>
                                  <textarea class="form-control" placeholder="Mausukan isi blog" required="" name="isi"><?= $data['isi'] ?></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Date Publish</label>
                                  <input type="date" class="form-control" name="date_publish" required="" name="date_publish" value="<?= $data['date_publish'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Publish</label>
                                  <input type="text" class="form-control" name="publish" required="" placeholder="Masukan publish" name="publish" value="<?= $data['publish'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kategori</label>
                                <input type="text" class="form-control" name="kategori" required="" placeholder="Masukan Kategori" value="<?= $data['kategori'] ?>">
                            </div>



                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
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
              
