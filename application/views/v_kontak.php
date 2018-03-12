<aside id="fh5co-hero" clsas="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url().'theme/images/slide_3.jpg'?>);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
						<div class="slider-text-inner">
							<h2>Get in touch. Don't be shy.</h2>
							<p class="fh5co-lead">Kami siap melayani Anda 24/7</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>

<div class="fh5co-contact animate-box">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3>Contact Info.</h3>
				<ul class="contact-info">
					<li><i class="icon-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
					<li><i class="icon-phone"></i>+ 1235 2355 98</li>
					<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
					<li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
				</ul>
			</div>

			<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<?php echo $this->session->flashdata('msg');?>
				<div class="row">
					<form method="post" action="<?php echo base_url().'kontak/kirim_pesan'?>">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="nama" placeholder="Nama" type="text" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="email" placeholder="Email" type="email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="pesan" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Kirim Pesan" class="btn btn-primary" type="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>