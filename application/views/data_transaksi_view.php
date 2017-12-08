    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lihat Obat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Transaksi</th>
                                        <th>Nama Pembeli</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Total Transaksi</th>

                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $no = 1;
                                    foreach ($obat as $data) 
                                    {

                                        echo '
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$data->id_transaksi.'</td>
                                            <td>'.$data->nm_pembeli.'</td>
                                            <td>'.$data->qty.'</td>
                                            <td>'.$data->harga.'</td>
                                            <td>'.$data->tgl_transaksi.'</td>
                                            <td>'.$data->qty*$data->harga.'</td>
                                           
                                        </tr>
                                        ';
                                        $no++;
                                    }
                                ?>

                                <!--kode_obat didapat dari table pada database nya-->
                                 <!-- <td> di dapat dari table pda database ->kode_obat-->
                                 <!--
                                    <a href="'.base_url().'index.php/obat/detail_obat/'.$data->kode_obat.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Lihat</a> 

                                  -->


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>