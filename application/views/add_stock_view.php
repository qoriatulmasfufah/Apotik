        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Apotik</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


<?php if (!empty($notif)) {
      echo '<div class="alert alert-success">';
      echo $notif;
      echo '</div>';
} ?>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Obat
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form role="form" method="post" id="form-pendaftaran" action="<?php echo base_url();?>index.php/admin/update_stok">
                                        <div class="form-group">
                                            <label>ID Obat</label>
                                            <input type="text" name="id_obat" class="form-control" value="<?php echo $detil->id_obat;?>" readonly="readonly" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" name="nama_obat" class="form-control" placeholder="Enter text">
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="number" name="qty" class="form-control" placeholder="Masukan">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Supplier</label>
                                            <select>
                                                <?php
                                                    foreach ($stock as $s) {

                                                        echo '<option value="'.$s->id_supplier.'">'.$s->nama_sp.'</option>';
                                                    }
                                                ?>
                                            </select> <br> <br>
                                        </div>

                                        
                                       <!--  <div class="form-group">
                                            <label>Indikasi</label>
                                            <textarea type="text" name="indikasi" class="form-control" rows="3"></textarea>
                                        </div> -->
                                        
                                        <input type="submit" name="submit" value="kirim" class="btn btn-primary">
                                        
                                       
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.