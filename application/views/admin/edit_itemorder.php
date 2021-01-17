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

                        foreach ($item_order as $data) {
                          
                        }

                       ?>
        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Order</label>
                              <input type="text" class="form-control" name="kd_order"  placeholder="Masukan kode order" value="<?= $data['kd_order'] ?>" >
                                <?php echo form_error('kd_order',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>


 
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Token Item</label>
                              <input type="text" class="form-control" name="kd_token_item" required="" placeholder="Masukan kode token item" value="<?= $data['kd_token_item'] ?>" >
                                <?php echo form_error('kd_token_item',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Produk</label>
                              <input type="text" class="form-control" name="kd_produk" required="" placeholder="Masukan kode produk" value="<?= $data['kd_produk'] ?>" >
                                <?php echo form_error('kd_produk',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Penerima</label>
                              <input type="email" class="form-control" name="nama_penerima"  placeholder="Masukan nama penerima" value="<?= $data['nama_penerima'] ?> " required="">

                               <?php echo form_error('nama_penerima',' <small class="text-danger pl-2">','</small>'); ?>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Email Penerima</label>
                              <input type="email" name="email_penerima" class="form-control" placeholder="Masukan email penerima" value="<?= $data['email_penerima'] ?>" required="">
                               <?php echo form_error('email',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label"> Hp Penerima</label>
                              <input type="hp_penerima" name="hp_penerima" class="form-control" placeholder="Masukan email penerima" value="<?= $data['hp_penerima'] ?>" required="">
                               <?php echo form_error('hp_penerima',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Tanggal Kirim</label>
                              <input type="date" name="tanggal_kirim" class="form-control" placeholder="" value="<?= $data['tanggal_kirim'] ?>" required="">
                               <?php echo form_error('tanggal_kirim',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Alamat Kirim</label>
                              <textarea class="form-control" name="alamat_kirim" required=""><?= $data['alamat_kirim'] ?></textarea>
                               <?php echo form_error('alamat_kirim',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            
                           
                           

                             <?php 

                                  $id_prov = $data['prov_kirim'];
                                  $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov))->result_array();

                                  foreach ($prov as $data_prov) {
                                   
                                  }

                               ?>
                            

                            <div class="mb-3">
                              <label for="" class="form-label">Provinsi Kirim</label>
                             <select id="prov" class="form-control" name="prov_kirim">
                               <option value="<?= $data_prov['id_prov'] ?>"><?= $data_prov['nama'] ?></option>
                               <?php foreach ($provinsi as $data1) { ?>
                                <option value="<?= $data1['id_prov'] ?>"><?= $data1['nama'] ?></option>
                              <?php } ?>
                             </select>
                               
                            </div>


                             <?php 

                                  $id_kab = $data['kab_kirim'];
                                  $kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id_kab))->result_array();

                                  foreach ($kab as $data_kab) {
                                
                                  }

                               ?>


                            <div class="mb-3">
                              <label for="" class="form-label">Kabupaten Kirim</label>
                             <select id="kab" class="form-control" name="kab_kirim">
                              <option value="<?= $data_kab['id_kab'] ?>"><?= $data_kab['nama'] ?></option>
                             </select>
                              
                            </div>

                             <?php 

                                  $id_kec = $data['kec_kirim'];
                                  $kec = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id_kec))->result_array();

                                  foreach ($kec as $data_kec) {
                                
                                  }

                               ?>

                             <div class="mb-3">
                              <label for="" class="form-label">Kecamatan Kirim</label>
                             <select id="kec" class="form-control" name="kec_kirim">

                              <option value="<?= $data_kec['id_kec'] ?>"><?= $data_kec['nama'] ?></option>
                             </select>
                               
                            </div>

                             <?php 

                                  $id_kel = $data['kel_kirim'];
                                  $kel = $this->db->get_where('tbl_kelurahan', array('id_kel' => $id_kel))->result_array();

                                  foreach ($kel as $data_kel) {
                                
                                  }

                               ?>

                             <div class="mb-3">
                              <label for="" class="form-label">Kelurahan Kirim</label>
                             <select id="kel" class="form-control" name="kel_kirim">
                                 <option value="<?= $data_kel['id_kel'] ?>"><?= $data_kel['nama'] ?></option>
                              </select>
                             </select>
                               
                            </div>





                            <div class="mb-3">
                              <label for="" class="form-label">Message</label>
                              <textarea class="form-control" name="message" required=""><?= $data['message'] ?></textarea>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Send Card Email</label>
                              <input type="text" name="send_card_email" class="form-control" value="<?= $data['send_card_email'] ?>" required="">

                            

                            <div class="mb-3">
                              <label for="" class="form-label">Waktu Kirim</label>
                              <input type="date" name="waktu_kirim" class="form-control" value="<?= $data['waktu_kirim'] ?>" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Sub Total</label>
                              <input type="number" name="sub_total" class="form-control" value="<?= $data['sub_total'] ?>" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Disc</label>
                              <input type="number" name="disc" class="form-control" value="<?= $data['disc'] ?>" required="">
                            </div>

                              <div class="mb-3">
                              <label for="" class="form-label">Total</label>
                              <input type="number" name="total" class="form-control" value="<?= $data['total'] ?>" required="">
                            </div>


                            
                            <div class="mb-3">
                                    <input type="submit" name="edit" class="btn btn-primary" value="Edit">
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


      <script>
        
        $(document).ready(function(){

          $('#prov').change(function(){

             var id = $(this).val();

            $("#kab").load("<?= site_url() ?>get/get.php?id="+id);

          });

        });


        $(document).ready(function(){

          $('#kab').change(function(){

             var kab = $(this).val();

            $("#kec").load("<?= site_url() ?>get/get2.php?id="+kab);

          });

        });


        $(document).ready(function(){

          $('#kec').change(function(){

             var kel = $(this).val();

            $("#kel").load("<?= site_url() ?>get/get3.php?id="+kel);

          });

        });



      </script>