<?php
    $authorId = isset($authorId) ? $authorId : 0;
    if ($total_rows < 1): 
?>
    <section class="features3 cid-qLBesDqkEu" id="features3-p">
        <div class="fh5co-blog-container">
            <div class="col-md-12">
                <div class="height--1-1 flex flex--column flex-justified--center text-center soft-quad push-quad--top">
                    <img src="https://app.optimizely.com/static/img/p13n/page-list-empty-state.svg" class="anchor--middle push--ends" width="450">
                    <h1 class="push-half--bottom">Maaf Belum ada artikel</h1>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section class="features3 cid-qLBesDqkEu" id="features3-p">
        <div class="container">
            <div class="row">
                <?php
                foreach ($data->result_array() as $j) :
                    $post_id=$j['tulisan_id'];
                    $post_judul=$j['tulisan_judul'];
                    $post_isi=$j['tulisan_isi'];
                    $post_author=$j['tulisan_author'];
                    $post_image=$j['tulisan_gambar'];
                    $post_tglpost=$j['tanggal'];
                    $post_slug=$j['tulisan_slug'];
                    $pengguna_job = $authorId == 1 ? '' : ' - ' .$j['pengguna_tentang'];
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
                                    <?php echo $post_tglpost.' | '.$post_author.$pengguna_job;?>
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
                <?php endforeach?>

            </div>
            <div class="col-lg-12">
                <div class="text-center"><?php echo $page;?></div>
            </div>
        </div>
    </section>
<?php endif;?>