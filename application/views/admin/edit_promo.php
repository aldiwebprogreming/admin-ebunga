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



                        <?php foreach ($edit_promo as $data) {
                          # code...
                        } ?>     
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Promo</label>
                              <input type="text" class="form-control" name="kd_promo"  placeholder="Masukan kode promo" required="" value="<?= $data['kd_promo'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Promo</label>
                              <input type="text" class="form-control" name="nama_promo"  placeholder="Masukan nama promo" required="" value="<?= $data['nama_promo'] ?>">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Deks Promo</label>
                             <textarea class="form-control" name="deks_promo" placeholder="Masukan deks promo"><?= $data['deks_promo'] ?></textarea>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Cakupan</label>
                              <input type="text" class="form-control" name="cakupan"  placeholder="Masukan cakupan" required="" value="<?= $data['cakupan'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Id Sellere</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" required="" value="<?= $data['id_seller'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Tipe</label>
                              <input type="text" class="form-control" name="tipe"  placeholder="Masukan type" required="" value="<?= $data['tipe'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Value</label>
                              <input type="number" class="form-control" name="value"  placeholder="Masukan valueea" required="" value="<?= $data['value'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Start Aktive</label>
                              <input type="date" class="form-control" name="start_active"  placeholder="Masukan start active" required="" value="<?= $data['start_active'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">End Aktive</label>
                              <input type="date" class="form-control" name="end_active"  placeholder="Masukan end active" required="" value="<?= $data['end_active'] ?>">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Status</label>
                              <input type="text" class="form-control" name="status"  placeholder="Masukan status" required=""v value="<?= $data['status'] ?>">
                               
                            </div>



                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>promo/data_promo" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
            </div>
            </section>
            </div>
                            
