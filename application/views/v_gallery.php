


<aside id="fh5co-hero" clsas="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url().'theme/images/slide_3.jpg'?>);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
						<div class="slider-text-inner">
							<h2>Our Awesome Gallery</h2>
							<p class="fh5co-lead"> Awesome source code by <a href="http://mfikri.com/" target="_blank">M Fikri Setiadi</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>

</div>
<div class="container">
	<div class="row"><br/>
		<center><h2>Awesome Gallery</h2></center>
		<?php	foreach ($data->result() as $row) :	?>
			<div class="col-md-4">
				<a class="example-image-link" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-lightbox="gallery" data-title="<?php echo $row->galeri_judul;?>"><img class="example-image img-responsive" src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="image-1"/></a>
			</div>
		<?php endforeach;?>
	</div>
</div>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
			<br/>
		</div>
	</div>
</div>