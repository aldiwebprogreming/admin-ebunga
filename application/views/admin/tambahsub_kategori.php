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
                              <label for="" class="form-label">Kode  Sub Kategori</label>
                              <input type="text" class="form-control" name="kd_sub_kategori"  placeholder="Masukan Kode Sub Katagori" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Kategori</label>
                              <input type="text" class="form-control" name="nama_kategori"  placeholder="Masukan nama Katagori" required="">
                            </div>
<!-- 
                            <div class="mb-3">
                              <label for="" class="form-label">Slug</label>
                              <input type="text" class="form-control" name="slug"  placeholder="Masukan slug " required="">
                            </div> -->

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Kode Kategori</label>
                              <select name="kd_kategori" class="form-control">
                                <option>--Pilih Kode kategori--</option>
                                <?php  foreach ($kategori as $data) { ?>
                                  <option><?= $data['kd_kategori'] ?></option>
                                <?php } ?>
                              </select>
                           
                            </div>

                              <div class="mb-3">
                                <label> Foto Sub Kategori</label>
                                <input type="file" name="foto" class="form-control" required="">
                              </div>



                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                 <a href="<?= base_url() ?>katagori/sub_kategori" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
             </div>
           </div>
         </div>
       </section>
     </div>