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
                           


                          <?php foreach ($edit_subkategori as $data ) {
                            
                          } ?>
                                
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Sub Katagori</label>
                              <input type="text" class="form-control" name="kd_sub_kategori"  placeholder="Masukan Kode Kategori" required="" value="<?= $data['kd_kategori'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Katagori</label>
                              <input type="text" class="form-control" name="nama_kategori"  placeholder="Masukan nama Kategori" required="" value="<?= $data['nama_kategori'] ?>">
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Kode Katagori</label>
                              <select name="kd_kategori" class="form-control">
                                <option><?= $data['kd_kategori'] ?></option>

                                <?php  foreach ($kategori1 as $data1) { ?>
                                  <option><?= $data1['kd_kategori'] ?></option>
                                <?php } ?>
                              </select>
                            </div>

                            <div class="mb-3">
                                <label> Foto Sub Kategori</label>
                                <input type="file" name="foto" class="form-control" required="">
                              </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                               <select class="form-control" name="active">
                               <?php if ($data['aktif'] == 1) { ?>
                                <option value="<?= $data['aktif'] ?>">Y</option>
                                <option value="0">N</option>
                             
                           <?php } else{ ?>
                                <option value="<?= $data['aktif'] ?>">N</option>
                                <option value="1">Y</option>
                              <?php } ?>
                              </select>
                            </div>

                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>katagori/sub_kategori" class="btn btn-success">Kembali</a>
                                </div>
                            </div>
                            

                        </form>
                    
                     </div>
          
               </div>
             </div>
             </div>
           </section>
         </div>
