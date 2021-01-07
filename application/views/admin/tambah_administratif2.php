 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?= $sub_title; ?></li>
                        </ol>
                        <div class="row">         
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Nama Daerah</label>
                              <input type="text" class="form-control" name="nama_daerah"  placeholder="Masukan namae daerah" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Pos</label>
                              <input type="text" class="form-control" name="kode_post"  placeholder="Masukan kode pos" required="">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Tingkat</label>
                                <input type="text" class="form-control" name="tingkat"  placeholder="Masukan tingkat" required="" maxlength="5">
                           
                            </div>

                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="<?= base_url() ?>daerah_administratif_2/administratif2" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
                </main>
                
