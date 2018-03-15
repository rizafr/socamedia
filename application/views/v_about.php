<?php
    $level = [
        1 => 'Administrator',
        2 => 'Author',
        3 => 'Advisor',
    ];
?>
<section class="features16 cid-qLBgVOmRTX" id="features16-w" style="padding-bottom: 30px; background-color: #f1f1f1">
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
            Socamedia.id
        </h2>
        <div class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5 text-left">
            <p>Woah hold on a sec…</p>
            <p>Do you really want to know what is Socamedia.id truly is? If yes, please stay still until the very end of this paragraph :)</p>
            <p>Okay so, where do I begin? Oh yeah with this story...</p>
            <blockquote>
                <p>
                    There was a time at France when the Eiffel tower wasn’t stood still as it is today. An orphan girl named Marie lived peacefully with her blind grandmother on a border near Germany. Marie’s parents passed away when she was 5 years old due to dreadful Napoleonic wars.</p>
                <p>
                    One day, when Marie was ploughing in her grandma’s field, she found a brown-reddish book on the ground just near the roadside. It was a book from nearby school as it read “Mathématiques”. She was curious about it but she never read a book before or even being taught how to read by her grandma. She then ignored the book, put it on the side of the road and continued to plough.</p>
                <p>Time passed by and she eventually inherited the field and she continued to plough until her twenties, thirties, and eventually sixties. She was never married, or even had a chance to. In the end, she was deceased alone and no one ever remember her name.</p>
            </blockquote>
            <p>But not us! Now imagine if someone ever approached Marie and taught her to read until she eventually could go to school by herself. Imagine if eventually she could read that book. An exposure of knowledge would’ve help her to gain skills, to learn more, and eventually ended up better then she was before.</p>
            <p>Socamedia.id is here to fulfil that role, we are all about connecting people in creative industry and help people in creative businesses to be informed and well-fed with quality article about business strategy.</p>
            <p>We are here at Socamedia.id come to work everyday with that in mind. We are committed to help you. We curate topics &amp; trends from 17 sectors from creative industry, we analyse and talk it with experts from those sectors, and we finally share it to you at Socamedia.id.</p>
            <p>We are from, by, and for creative industry.</p>
        </div>

    </div>
</section>

<section class="features16 cid-qLBgVOmRTX" id="features16-w">
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
            OUR AWESOME TEAM
        </h2>
        <div class="row media-row">
			<?php foreach ($data->result_array() as $i) :
	           $pengguna_id=$i['pengguna_id'];
	           $pengguna_nama=$i['pengguna_nama'];
	           $pengguna_jenkel=$i['pengguna_jenkel'];
	           $pengguna_email=$i['pengguna_email'];
	           $pengguna_username=$i['pengguna_username'];
	           $pengguna_password=$i['pengguna_password'];
	           $pengguna_nohp=$i['pengguna_nohp'];
	           $pengguna_level=$i['pengguna_level'];
               $pengguna_photo=$i['pengguna_photo'];
               $pengguna_linkdin=$i['pengguna_linkdin'];
	           $pengguna_tentang=$i['pengguna_tentang'];
	        ?>
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="<?php echo base_url().'assets/images/'.$pengguna_photo;?>">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                            <?= $pengguna_nama; ?>
                        </p>
                        <p>
                            <?php echo $level[$pengguna_level];?>
                        </p>
                    </div>
                    <div class="item-role px-2">
                        <?= $pengguna_tentang; ?>
                    </div>
                    <div class="item-social pt-2">
                        <a href="<?= prep_url($pengguna_linkdin);?>" target="_blank">
                            <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                </div>
            </div>
        	<?php endforeach;?>
        </div>
    </div>
</section>