<?php 
	$b=$data->row_array();
?>
<?php $this->load->view('adminstba/layout_more/top');?>
<div class="card">  
    <div class="header" >
	<div class="container">
		 <div class="header" >
                 <h4 class="title">Pengumuman</h4>
                 <p class="category">STBA LIA Yogyakarta</p>
             <hr/>
         </br>
    </div>
    <button style="background-color: #4091e2;" class="btn btn-default btn-block" ><a style="color:white;" href="<?php echo base_url().'index.php/post_berita/lists';?>"> Kembali</a></button>
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo $b['berita_judul'];?></h2><hr/>
			<img src="<?php echo base_url().'assets/images/'.$b['berita_image'];?>" width="650px" height="900">
			<?php echo $b['berita_isi'];?>
		</div>
		</div>
	</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url('assets/js/light-bootstrap-dashboard.js?v=1.4.0')?>"></script>
</body>
</html>
</br>

<?php $this->load->view('adminstba/layout_more/bottom');?>