<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $sub_title; ?></h1>
          </div>
          

          <div class="row">

              <div id="tampil"></div>

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?= $sub_title ?></h4>
                  </div>
                        
                        <div class="card-body">
                                 <a href="<?= base_url() ?>user/tambah_user" class ="btn btn-primary mb-4"> Tambah User</a> 

                                  <!--  <a href="" id="print" class ="btn btn-primary mb-4"><i class="fas fa-print"></i> Print</a>  -->

                                    <a href="<?= base_url() ?>cetak_user/" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 

                                      <a href="<?= base_url() ?>user/cetak_excel" id="" class ="btn btn-success mb-4" ><i class="fas fa-print"></i> Cetak Excel</a> 

                                  <select style="margin-left: 50%;" id="pilih_user">
                                      <label>Pilih data user</label>
                                     <option>all</option>
                                      <option>buyyer</option>
                                      <option>seller</option>
                                      <option>admin</option>
                                      <option>super admin</option>
                                      
                                 </select>
<!-- 
                                  <a href="<?= base_url() ?>user/tambah_user" class ="btn btn-danger mb-4"> PDF</a> 


                                  <a href="<?= base_url() ?>user/tambah_user" class ="btn btn-success mb-4">Excel</a> 
 -->
                                <div class="table-responsive" id="data">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Type</th>
                                                <th>Last Login</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                                <th style="display: none;">Active</th>
                                                <th style="display: none;">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Type</th>
                                                <th>Last Login</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($user as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= $data['type'] ?></td>
                                                  <!--  <td><?= $data['password'] ?></td> -->
                                                <td><?= $data['last_login'] ?></td>
                                                 <td><?= $data['active'] ?></td>
                                                <td>
                                                     <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">
                                                     <a href="<?= base_url() ?>user/hapus_user?id=<?= $data['id'] ?>" class="btn btn-danger"  onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                   </span>
                                                    <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                                    <a href="<?= base_url() ?>user/edit_user?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                                  </span>
                                                </td>
                                              
                                            </tr>

                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                  
                  </div>
                </div>

            </div>
           
         
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
        <!--    Copyright &copy; <?= date('Y') ?> <div class="bullet"></div> <a href="https://nauval.in/">www.ebunga.com</a> -->
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>


  


   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

   <script>

  $(document).ready(function(){

    $("#print").click(function(){

    window.print();


    });

  });


  $(document).ready(function(){

    $("#pilih_user").change(function(){

      var a = $(this).val();

      $.get("<?= base_url() ?>user/pilih_data?status="+a, function(data, success){

        $("#data").html(data);

      });
    });

  });

  </script>


<script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>



