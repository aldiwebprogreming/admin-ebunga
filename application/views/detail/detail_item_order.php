
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


                        <?php foreach ($item_order as $data) {
                       
                        } ?>        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                                

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Order</strong></label>
                             <p><?= $data['kd_order'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Token Order</strong></label>
                             <p><?= $data['kd_token_item'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Produk</strong></label>
                               <p><?= $data['kd_produk'] ?></p>
                            </div>s
                            <hr>
                            

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Penerima</strong></label>
                                  <p><?= $data['nama_penerima'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Email Penerima</strong></label>
                                 <p><?= $data['email_penerima'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Phone Penerima</strong></label>
                                  <p><?= $data['hp_penerima'] ?></p>
                            </div>
							               <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Tgl Kirim</strong></label>
                               <p><?= $data['tanggal_kirim'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat Kirim</strong></label>
                               <p><?= $data['alamat_kirim'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kelurahan Kirim</strong></label>
                               <p><?= $data['kel_kirim'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kecamatan Kirim</strong></label>
                               <p><?= $data['kec_kirim'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kabuptan Kirim</strong></label>
                               <p><?= $data['kab_kirim'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Provinsi Kirim</strong></label>
                               <p><?= $data['prov_kirim'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Message</strong></label>
                               <p><?= $data['message'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Send Card Email</strong></label>
                               <p><?= $data['send_card_email'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Kirim</strong></label>
                               <p><?= $data['waktu_kirim'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Sub Totola</strong></label>
                               <p><?= $data['sub_total'] ?></p>
                            </div>
                            <hr>

                              <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Disc</strong></label>
                               <p><?= $data['disc'] ?></p>
                            </div>
                            <hr>

                               <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Total</strong></label>
                               <p><?= $data['total'] ?></p>
                            </div>
                            <hr>


                            <div class="mb-3">
                             
                                <a href="<?= base_url() ?>item_order/data_itemorder" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
       </div>
    </div>
  </div>
</section>
</div>
              
