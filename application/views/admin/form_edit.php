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
                           
       


                          <?php foreach ($edit_kategori as $data ) {
                            
                          } ?>
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Katagori</label>
                              <input type="text" class="form-control" name="kd_kategori"  placeholder="Masukan Kode Kategori" required="" value="<?= $data['kd_kategori'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Katagori</label>
                              <input type="text" class="form-control" name="nama_kategori"  placeholder="Masukan nama Kategori" required="" value="<?= $data['nama_kategori'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deks" placeholder="Deks Kategori"><?= $data['deks'] ?></textarea>
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                             <select class="form-control" name="active">
                               <?php if ($data['active'] == 1) { ?>
                                <option value="<?= $data['active'] ?>">Y</option>
                                <option value="0">N</option>
                             
                           <?php } else{ ?>
                                <option value="<?= $data['active'] ?>">N</option>
                                <option value="1">Y</option>
                              <?php } ?>
                              </select>
                            </div>

                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>katagori/data_katagori" class="btn btn-success">Kembali</a>
                                </div>
                            </div>
                            

                        </form>
                    
                     </div>
          
            
               </div>
             </div>
             </div>
           </section>
         </div>
