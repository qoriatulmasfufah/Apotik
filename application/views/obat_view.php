        <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/obat/simpan">
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
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" name="nm_obat" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" name="harga" class="form-control" placeholder="Enter text">
                                        </div>

                                        <div class="form-group">
                                            <label>Indikasi</label>
                                            <input type="text" name="indikasi" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock" class="form-control">
                                        </div>
                                       <!--  <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock" class="form-control">
                                        </div> -->


                                        
                                       <!--  <div class="form-group">
                                            <label>Indikasi</label>
                                            <textarea type="text" name="indikasi" class="form-control" rows="3"></textarea>
                                        </div> -->
                                        
                                        
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-md-success">
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