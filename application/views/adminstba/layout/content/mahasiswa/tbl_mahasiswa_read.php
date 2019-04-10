<div class="card">  
    <div class="header" >
    <div class="container">
         <div class="header" >
                 <h4 class="title">Detail Data Mahasiswa</h4>
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
                                
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <center>
                                    <img style="width:500px;height:auto" src="<?= base_url() ?>assets/images/img_mhs/<?= $img_file ?>"/>
                                </center>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <h2 style="text-align:center;"><?= $nama_mhs ?></h2>
                                <h2 style="text-align:center;"><?= $nim?></h2>
                            </br>
                            </br>
                                <table class="table">
                                    <tr>
                                        <td>NIM</td>
                                        <td>
                                            <?php echo $nim;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td>
                                            <?php echo $nik;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <?php echo $nama_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>
                                            <?php echo $tempat_lahir_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tgl Lahir</td>
                                        <td>
                                            <?php echo $tgl_lahir_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <?php echo $gender_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td>
                                            <?php echo $agama_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Angkatan</td>
                                        <td>
                                            <?php echo $angkatan; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenjang</td>
                                        <td>
                                            <?php echo $jurusans->nama_jenjang.' '.$jurusans->nama_jurusan; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status Masuk</td>
                                        <td>
                                            <?php
                                            if($id_st_msk=='1'){
                                                echo 'Baru';    
                                            }else{
                                                echo 'Transfer';
                                                
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu Kandung</td>
                                        <td>
                                            <?php echo $nama_ibu_kandung ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sks Diakui</td>
                                        <td>
                                            <?php echo $sks_diakui; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a href="<?php echo site_url('admin/baak/mahasiswa') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></td>
                                    </tr>
                                </table>
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
