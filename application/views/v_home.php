<!-- Slider -->
<?php $this->load->view('template/v_slider')?>
<!-- End Slider -->

<section class="features3 cid-qLBcGxRbYn" id="features3-j">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h3 class="title__content">
						Artikel Populer
					</h3>
				</div>
			</div>
			<?php
				foreach ($populer->result_array() as $j) :
					$post_id=$j['tulisan_id'];
					$post_judul=$j['tulisan_judul'];
					$post_isi=$j['tulisan_isi'];
					$post_author=$j['tulisan_author'];
					$post_image=$j['tulisan_gambar'];
					$post_tglpost=$j['tanggal'];
					$post_slug=$j['tulisan_slug'];
			?>
			<div class="card p-3 col-12 col-md-6 col-lg-3">
				<div class="card-wrapper">
					<div class="card-img">
						<img class="post_image" src="<?php echo base_url().'assets/images/'.$post_image;?>">
					</div>
					<div class="card-box">
						<h4 class="card-title">
							<?php echo $post_judul;?>
						</h4>
						<div class="article__info">
							<?php echo $post_tglpost.' | '.$post_author;?>
						</div>
						<div class="card-content">
							<?php echo limit_words($post_isi,15).'...';?>
						</div>
					</div>
					 <div class="card-footer bg-transparent border-danger">
					 	<a href="<?php echo base_url().'artikel/'.$post_slug;?>" class="btn btn-primary display-4">
						Read more</a>
					 </div>
				</div>
			</div>
			<?php endforeach;?>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h3 class="title__content">
						Artikel Terbaru
					</h3>
				</div>
			</div>
			<?php
				foreach ($terbaru->result_array() as $j) :
					$post_id=$j['tulisan_id'];
					$post_judul=$j['tulisan_judul'];
					$post_isi=$j['tulisan_isi'];
					$post_author=$j['tulisan_author'];
					$post_image=$j['tulisan_gambar'];
					$post_tglpost=$j['tanggal'];
					$post_slug=$j['tulisan_slug'];
			?>
			<div class="card p-3 col-12 col-md-6 col-lg-3">
				<div class="card-wrapper">
					<div class="card-img">
						<img class="post_image image-responsive" src="<?php echo base_url().'assets/images/'.$post_image;?>">
					</div>
					<div class="card-box">
						<h4 class="card-title">
							<?php echo $post_judul;?>
						</h4>
						<div class="article__info">
							<?php echo $post_tglpost.' | '.$post_author;?>
						</div>
						<div class="card-content">
							<?php echo limit_words($post_isi,15).'...';?>
						</div>
					</div>
					 <div class="card-footer bg-transparent border-danger">
					 	<a href="<?php echo base_url().'artikel/'.$post_slug;?>" class="btn btn-primary display-4">
						Read more</a>
					 </div>
				</div>
			</div>
			<?php endforeach;?>
		</div>


	</div>
</section>