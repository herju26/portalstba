<div class="card">  
    <div class="header" >
    <div class="container">
         <div class="header" >
                 <h4 class="fa fa-graduation-cap">Data Dosen</h4>
                 <p class="category">STBA LIA Yogyakarta</p>
             <hr/>
         </br>
    </div>
    <div class="page" >
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Dosen</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-md-4">
                                        <?php echo anchor(site_url('admin/baak/dosen/create'),'<i class="fa fa-plus"></i> Tambah Dosen', 'class="btn btn-primary"'); ?>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div style="margin-top: 8px" id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1 text-right">
                                    </div>
                                    
                                </div>
                                <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIDN</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Tempat,Tgl Lahir</th>
                                        <th>Agama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <?php
                                    foreach ($c_dosen_data as $c_dosen)
                                    {
                                        if($c_dosen->id_status=='1'){
                                    ?>
                                    <tr>
                                        <td width="80px">
                                            <?php echo ++$start ?>
                                        </td>
                                        <td>
                                            <?php echo $c_dosen->nidn ?>
                                        </td>
                                        <td>
                                            <?php echo $c_dosen->nama ?>
                                        </td>
                                        <td>
                                            <?php if($c_dosen->gender=='L'){echo 'Laki-laki';}else{echo 'Perempuan';} ?>
                                        </td>
                                        <td>
                                            <?php echo $c_dosen->alamat ?>
                                        </td>
                                        <td>
                                            <?php echo $c_dosen->tempat_lahir.', '.date('d M Y',strtotime($c_dosen->tgl_lahir)) ?>
                                        </td>
                                        <td>
                                            <?php echo $c_dosen->agama ?>
                                        </td>
                                        <td style="text-align:center" width="200px">
                                            <a class="btn btn-primary" href="<?= site_url('admin/baak/dosen/read/'.$c_dosen->id_dosen)?>"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-warning" href="<?= site_url('admin/baak/dosen/update/'.$c_dosen->id_dosen)?>"><i class="fa fa-pen"></i></a>
                                            <a class="btn btn-danger"  onclick="javasciprt: return confirm('Anda yakin akan menghapus data dosen? ')"  href="<?= site_url('admin/baak/dosen/delete/'.$c_dosen->id_dosen)?>"><i class="fa fa-trash"></i></a>
                                            
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </table>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary">Total :
                                            <?php echo $total_rows ?></a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <?php echo $pagination ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>
        </div>
    </div>
</div>
</br>