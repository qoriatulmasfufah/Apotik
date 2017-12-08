        <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/admin/edit_obat">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">


                <?php
                    if (!empty($notif)){
                        echo '<div class="alert alert-danger">'.$notif.'</div>';
                    }
                 ?>

                 
                    <h1 class="page-header">Apotik</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
                                    <form role="form" method="post" action="<?php echo base_url();?>index.php/admin/kembali">
                                        <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input type="text" name="kode" class="form-control" value="<?php echo $detil->kode_obat;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Enter text" value="<?php echo $detil->nama_obat;?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Indikasi</label>
                                            <input type="text" name="harga" class="form-control" value="<?php echo $detil->indikasi;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Obat</label>
                                            <input type="text" name="harga" class="form-control" value="<?php echo $detil->harga_obat;?>" disabled?>
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock" class="form-control" value="<?php echo $detil->stock;?>" disabled>
                                        </div>


                                        
                                       <!--  <div class="form-group">
                                            <label>Indikasi</label>
                                            <textarea type="text" name="indikasi" class="form-control" rows="3"></textarea>
                                        </div> -->
                                        
                                        <a href="<?php echo base_url() ?>index.php/obat/data_obat" class="btn btn-md btn-primary">Kembali</a>
                                        
                                       
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