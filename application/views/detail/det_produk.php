
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


                      <?php 

                          foreach ($produk as $data) {
                          
                          }

                       ?>

                                
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Produk</strong></label>
                             <p>"<?= $data['kd_produk'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Produk</strong></label>
                             <p><?= $data['nama_produk'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label"><strong>Deskripsi Produk</strong></label>
                             <p><?= $data['deks_produk'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kategori</strong></label>
                              <select class="form-control" name="kategori">
                                <option><?= $data['kategori'] ?></option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label"> <strong>Sub Kategori</strong></label>
                              <p><?= $data['sub_kategori'] ?></p>
                            </div>
                            <hr>
                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Id Branch</strong></label>
                             <p><?= $data['id_branch'] ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Id Seller</strong></label>
                             <p><?= $data['id_seller'] ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Harga</strong></label>
                             <p><?= $data['harga'] ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Stok</strong></label>
                             <p><?= $data['stok'] ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Foto utama</strong></label>
                             <p><?= $data['foto_utama'] ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                               <p><?= $data['active'] ?></p>
                            </div>
                            <hr>



                            <div class="mb-3">
                         
                                <a href="<?= base_url() ?>produk/data_produk" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
               </div>
             </div>
             </div>
           </section>
         </div>
