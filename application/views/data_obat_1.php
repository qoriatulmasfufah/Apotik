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
                            <a href="<?php echo base_url(); ?>index.php/obat/obat_view"></i> Tambah</a><br><br>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Harga</th>
                                        <th>Indikasi</th>
                                        <th>Stock</th>
                                        <th>Aksi</th>
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
                                            <td>'.$data->id_obat.'</td>
                                            <td>'.$data->nm_obat.'</td>
                                            <td>'.$data->harga.'</td>
                                            <td>'.$data->indikasi.'</td>
                                            <td>'.$data->stock.'</td> 
                                            <td> 
                                                <a href="'.base_url().'index.php/obat/tambah/'.$data->id_obat.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Tambah</a>
                                                
                                                <a href="'.base_url().'index.php/obat/hapus/'.$data->nm_obat.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>

                                                 <a href="'.base_url().'index.php/obat/lihat/'.$data->id_obat.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Edit</a>




                                            </td>
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