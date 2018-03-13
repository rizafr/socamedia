<!-- Slider -->
<?php $this->load->view('template/v_slider')?>
<!-- End Slider -->

<section class="features3 cid-qLBcGxRbYn" id="features3-j">
	<div class="container">
		<div class="row">
			<?php
				foreach ($post->result_array() as $j) :
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
						<img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Mobirise" title="">
					</div>
					<div class="card-box">
						<h4 class="card-title mbr-fonts-style display-4">
							<?php echo $post_judul;?>
							<br>
							<br>
							<?php echo $post_tglpost.' | '.$post_author;?>
						</h4>
						<p class="mbr-text mbr-fonts-style display-4">
							<?php echo limit_words($post_isi,20).'...';?>
						</p>
					</div>
					<div class="mbr-section-btn text-center">
						<a href="<?php echo base_url().'artikel/'.$post_slug;?>" class="btn btn-primary display-4">
						Read more</a>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</section>