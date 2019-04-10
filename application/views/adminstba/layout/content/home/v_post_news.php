<?php $this->load->view('adminstba/layout_more/top');?>
<div class="header" >
	<div class="container">
		 <div class="header" >
                 <h4 class="title">Pengumuman</h4>
                 <p class="category">STBA LIA Yogyakarta</p>
             <hr/>
         </br>
    </div>
			<form action="<?php echo base_url().'index.php/post_berita/simpan_post'?>" method="post" enctype="multipart/form-data">
	            <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
	            <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
	            <input type="file" name="filefoto"><br>
	            <input type="text" name="pj" class="form-control" placeholder="Penanggung Jawab Pengumuman" required/><br/>
	            <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
            </form>
		</div>
		
	</div>
</div>
	
	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
	<script type="text/javascript">
	  $(function () {
	    CKEDITOR.replace('ckeditor');
	  });
	</script>
</body>
</html>
</br>
<div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> STBA LIA Yogyakarta</a> All right Reserved.
                </p>
            </div>



    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('assets/js/light-bootstrap-dashboard.js?v=1.4.0')?>"></script>


    <!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
<!-- Demo scripts for this page-->
<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>


        <script src="<?php echo base_url('assets/plugins/tinymce/tinymce.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/kcdev.js'); ?>"></script>


