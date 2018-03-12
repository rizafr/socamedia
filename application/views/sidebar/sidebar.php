<div class="col-md-4">
	<div class="sidebar">
		<h4>KATEGORI</h4>

		<div style="border-bottom: 1px #ccc solid;margin-top:-20px;margin-bottom:20px;"></div>
		<ul class="list-unstyled">
			<?php foreach($kat->result() as $i):?>
				<li><a href="<?php echo base_url().'blog/kategori/'.$i->kategori_id;?>"><?php echo $i->kategori_nama.' ('.$i->jml.')';?></a></li>
			<?php endforeach;?>
		</ul>
	</div>

	<br/>
	<div class="sidebar">
		<h4>ARTIKEL POPULER</h4>
		<div style="border-bottom: 1px #ccc solid;margin-top:-20px;margin-bottom:20px;"></div>
		<?php foreach ($populer->result() as $row) : ?>
			<div class="media">
				<div class="media-left">
					<a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>">
						<img class="media-object" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" width="90">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h4>
					<span><small><i>by: <?php echo $row->tulisan_author;?> | <?php echo $row->tanggal;?></i></small></span>
				</div>
			</div>
		<?php endforeach;?>

	</div>
	<br/>

	<div class="sidebar">
		<h4>POST TERBARU</h4>
		<div style="border-bottom: 1px #ccc solid;margin-top:-20px;margin-bottom:20px;"></div>
		<?php foreach ($terbaru->result() as $row) : ?>
			<div class="media">
				<div class="media-left">
					<a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>">
						<img class="media-object" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" width="90">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h4>
					<span><small><i>by: <?php echo $row->tulisan_author;?> | <?php echo $row->tanggal;?></i></small></span>
				</div>
			</div>
		<?php endforeach;?>
	</div>

</div>