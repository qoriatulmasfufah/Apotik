        
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
                                    <form role="form" method="post" action="<?php echo base_url();?>index.php/transaksi/transaksi">



                                        <div class="form-group">
                                            <label>Nama Pembeli</label>
                                            <input type="text" name="nm_pembeli" class="form-control" value=" ">
                                        </div>

                                        <div>

                                        <label>Nama Obat</label>
                                        <select class="form-control" name="id_obat">
                                        <?php 

                                            $obat = $this->db->query("select id_obat,nm_obat from obat")->result();

                                            if(!empty($obat)){
                                                foreach ($obat as $data) {
                                                    echo '<option value="'.$data->id_obat.'">'.$data->nm_obat.'</option>';
                                                }
                                            }

                                        ?>

                                            
                                        </select> 
                                         </div>

                                         <div class="form-group">
                                            <label>Qty</label>
                                            <input type="text" name="qty" class="form-control" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Transaksi</label>
                                            <input type="date" name="tgl_transaksi" class="form-control" value="<?=date('Y-m-h')?>">
                                        </div>
                                        <div class="form-group">

                                        
                                        
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