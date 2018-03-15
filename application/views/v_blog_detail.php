<?php
$b=$data->row_array();
$url=base_url().'artikel/'.$b['tulisan_slug'];
$img=base_url().'assets/images/'.$b['tulisan_gambar'];
$title=$b['tulisan_judul'];
$author=$b['tulisan_author'];
$date=$b['tanggal'];
$kategori=$b['tulisan_kategori_nama'];
$deskripsi=strip_tags($b['tulisan_isi']);
$isi=$b['tulisan_isi'];
$views=$b['tulisan_views'];
$rating=$b['tulisan_rating'];
?>

<aside id="fh5co-hero" clsas="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url().'theme/images/slide_2.jpg'?>);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
						<div class="slider-text-inner">
							<h2>Enjoy the Blog</h2>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>


<div class="fh5co-blog-container">
	<div class="container">
		<div class="row">

			<div class="col-md-8 detail-article">
				<h1 style="margin-bottom:0px;"><a href="<?php echo $url;?>"><?php echo $title;?></a></h1>
				<small><em>Posted by: <?php echo $author;?> | <?php echo $date;?> | Kategori: <?php echo $kategori;?> | <?php echo $views;?> kali dibaca | Rating: <?php echo $rating;?></em></small>
				<figure>
					<img src="<?php echo $img;?>" alt="" class="img-responsive">
				</figure>
				<?php echo $isi;?>
				<?php if($rate->num_rows()>0):?>

				<?php else:?>
					<div class="alert">
						<strong>Apakah pendapat Anda tentang artikel ini?</strong><br/><br/>
						<a class="social-icons" href="<?php echo base_url().'blog/good/'.$b['tulisan_slug'];?>" title="Good"><i class="fa fa-smile-o fa-2x"></i></a>
						<a class="social-icons" href="<?php echo base_url().'blog/like/'.$b['tulisan_slug'];?>" title="Like"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
						<a class="social-icons" href="<?php echo base_url().'blog/love/'.$b['tulisan_slug'];?>" title="Love"><i class="fa fa-heart-o fa-2x"></i></a>
						<a class="social-icons" href="<?php echo base_url().'blog/genius/'.$b['tulisan_slug'];?>" title="Genius"><i class="fa fa-lightbulb-o fa-2x"></i></a>
					</div>
				<?php endif;?>
				<h4>Share:
				<span>
					<a class="popup2 social-icons" href="https://plus.google.com/share?url=<?php echo $url; ?>" title="Bagikan ke Google+"><i class="fa fa-google-plus"></i></a>
					<a class="popup2 social-icons" target="_parent" href="https://www.facebook.com/dialog/share?app_id=966242223397117&display=popup&href=<?php echo $url;?>" title="Bagikan ke Facebook"><i class="fa fa-facebook"></i></a>
					<a class="popup2 social-icons" href="http://twitter.com/share?source=sharethiscom&text=<?php echo $b['tulisan_judul'];?>&url=<?php echo $url; ?>&via=badoey" title="Bagikan ke Twitter"><i class="fa fa-twitter"></i></a>
					<a class="popup2 social-icons" href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());" title="Bagikan ke Pinterest"><i class="fa fa-pinterest"></i></a>
				</span>
				</h4>
			</div>
			<?php $this->load->view('sidebar/sidebar', [
				'kat' => $kat,
				'populer' => $populer,
				'terbaru' => $terbaru,
			]);?>
		</div>

	</div>
</div>