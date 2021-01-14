<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?= $sub_title; ?></li>
                        </ol>
                        <div class="row">         
                                
                                <div class="card-body">
                                 <a href="<?= base_url() ?>daerah_administratif_2/tambah_administratif2" class ="btn btn-primary mb-4"> Tambah Data Daerah Administratif 2</a> 
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Daerah</th>
                                                <th>Kode Pos</th>
                                                <th>Tingakat</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Daerah</th>
                                                <th>Kode Pos</th>
                                                <th>Tingakat</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($adms as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['nama_daerah'] ?></td>
                                                <td><?= $data['kode_pos'] ?></td>
                                                <td><?= $data['tingkat'] ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>daerah_administratif_2/hapus_adminstratif2?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>

                                                    <a href="<?= base_url() ?>daerah_administratif_2/edit_adminstratif2?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a> 

                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      
                        </div>
                </main>


  <script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>
                
