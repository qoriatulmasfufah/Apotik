<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Tambah Data Obat <strong>Apotik Khazanah</strong>
        </h1>
          <div class="col-lg-4 col-md-4">
            <form method="post" id="form-pendaftaran" enctype="multipart/form-data" action="#">
              <div class="row">
                  <div class="form-group">


                      <label>Nama Obat</label>
                      <select class="form-control" name="obat">
                        <?php 
                          foreach ($obat as $data) {
                          echo'
                            <option value="'.$data->idobat.'">'.$data->namaobat.' </option>

                            ';

                            
                          
                          }

                        ?>

                      </select>


                      <label>Stok</label>
                      <input type="number" class="form-control" name="stok"  placeholder="" >

                      
                      
                    
                      <input type="submit" class="btn btn-success" name="submit" value="kirim">
                  </div>
                </div>
            </form>

          </div>
    </div>
</div>

<!-- /.row -->
