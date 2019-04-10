<div class="card">  
    <div class="header" >
    <div class="container">
         <div class="header" >
                 <h4 class="title">Tambah Data Ruangan</h4>
                 <p class="category">STBA LIA Yogyakarta</p>
             <hr/>
         </br>
    </div>
    <div class="page" ">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-building" aria-hidden="true"></i> Ruangan</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="form-group">
                                        <label for="varchar">Jam mulai
                                            <?php echo form_error('jam_mulai') ?></label>
                                        <input type="text" class="form-control" name="jam_mulai" id="jam_mulai" placeholder="jam_mulai" value="<?php echo "07:00:00"; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Jam_akhir
                                            <?php echo form_error('jam_akhir') ?></label>
                                        <input type="text" class="form-control" name="jam_akhir" id="jam_akhir" placeholder="jam_akhir" value="<?php echo "08:50:00"; ?>" />
                                    </div>
                                    
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo $button ?></button>
                                    <a href="<?php echo site_url('admin/baak/room') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </form>
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
