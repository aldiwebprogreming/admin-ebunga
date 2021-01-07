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
                              <label for="" class="form-label">Kd Sub Produk</label>
                              <select class="form-control" name="kode_sub_produk">
                                <option>A</option>
                              </select>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Sub Produk</label>
                             <input type="text" name="nama_sub_produk" class="form-control">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Deks Sub Prduk</label>
                               <textarea class="form-control" name="deks_sub_produk"></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Produk</label>
                                  <input type="text" class="form-control" name="kode_produk" required="">
                            </div>

                            

                            <div class="mb-3">
                              <label for="" class="form-label">Foto Produk</label>
                                  <input type="file" class="form-control" name="foto">
                            </div>




                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="<?= base_url() ?>variasi_produk/data_variasi_produk" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
              </div>
             </div>
             </div>
           </section>
         </div>


                
