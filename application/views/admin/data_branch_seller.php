
<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->

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

                  <div id="loader" style=" position: fixed; left: 40%;">
                 
                  </div>   

                   
                                
                                <div class="card-body">
                                 <a href="<?= base_url() ?>Branch_seller/tambah_branch" class ="btn btn-primary mb-4"> Tambah Branch Seller</a> 

                                  <a href="<?= base_url() ?>branch_seller/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 

                                    <a href="#" id="" class ="btn btn-success mb-4" ><i class="fas fa-file-excel"></i> Cetak Excel</a> 

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                              <th>Kd Branch</th>
                                                <th>Nama Branch</th>
                                                <th>Id seller</th>
                                                <th>Alamat</th>
                                                <th>Phone</th>
                                                 <th>Status Branch</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Branch</th>
                                                <th>Nama Branch</th>
                                                <th>Id seller</th>
                                                <th>Alamat</th>
                                                <th>Phone</th>
                                                 <th>Status Branch</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($branch as $data) { 

                             $alamat = $data['alamat'];
                            $id_kel = substr($alamat, 0, 10);
                            // echo $id_kel ;

                            $id_kec = substr($alamat,11,6);
                            // echo $id_kec ;

                            $id_kab = substr($alamat,11,4);
                            // echo $id_kab ;

                            $id_prov = substr($alamat,23,2);


               $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov ))->result_array();

                    foreach ($prov as $data_prov) {
                     
                    }

                    $kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id_kab ))->result_array();

                    foreach ($kab as $data_kab) {
                     
                    }

                    $kec = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id_kec ))->result_array();

                    foreach ($kec as $data_kec) {
                     
                    }

                    $kel = $this->db->get_where('tbl_kelurahan', array('id_kel' => $id_kel ))->result_array();

                    foreach ($kel as $data_kel) {
                     
                    }

                   $list_alamat = $data_kel['nama'] ."-". $data_kec['nama'] ."-". $data_kab['nama'] ."-". $data_prov['nama'];



                                              ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_branch'] ?></td>
                                                <td><?= $data['nama_branch'] ?></td>
                                                <td><?= $data['id_seller'] ?></td>
                                                <td><?= $list_alamat; ?></td>
                                                <td><?= $data['phone'] ?></td>
                                                <td>
                                                    <?php
                                                      if ($data['status_branch'] == 'active') { ?>
                                                         <a id="status" href="<?= base_url() ?>branch_seller/status_branch_seller?id=<?= $data['id'] ?>" class="badge rounded-pill btn btn-primary" onclick="return confirm('Apakah ingin mendisable branch seller ini ?')" id="statuss"><?= $data['status_branch'] ?></a>
                                                    <?php } else { ?>

                                                       <a id="status" href="<?= base_url() ?>branch_seller/status_branch_seller?id=<?= $data['id'] ?>" class="badge rounded-pill btn btn-danger" onclick="return confirm('Apakah ingin mengactive kan branch seller ini ?')"><?= $data['status_branch'] ?></a>
                                                     <?php } ?>
                                                 </td>
                                                <td>

                                                  <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">

                                                    <a href="<?= base_url() ?>branch_seller/hapus_branch?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                  </span>

                                              <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                              <a href="<?= base_url() ?>branch_seller/edit_branch?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                              </span>


                                              <span class="d-inline-block" data-toggle="tooltip" data-title="Detail">
                                                  <a href="<?= base_url() ?>branch_seller/detail?id=<?= $data['id'] ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>

                                                </span>

                                               

                                                
                                              
                                            </tr>

                                            <!-- Modal -->



                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      
                        </div>
                </main>



                  </div>
                </div>

            </div>
           
         
        </section>

      </div>
      <footer class="main-footer">
        <div class="footer-left">
         <!--  Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> -->
        </div>
        <div class="footer-right">
         
        </div>
      </footer>
    </div>
  </div>

<script>

$(document).ready(function(){



})


function loading(){

  $("#status").click(function(){

      $.get("<?= site_url() ?>loader.php", function(status, data){

        $("#loader").html(data);

      })




</script>

<script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>