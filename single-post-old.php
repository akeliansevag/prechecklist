<?php get_header();?>
  <?php $post = get_post();?>
  <section class="mt-5 animatedParent animateOnce">
    <div class="container animated fadeIn">
      <a class="back-to" href="<?=get_permalink( get_page_by_path( 'news' ) )?>"><svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>BD796570-9AD9-4C45-9665-8083BAEB3CD5</title>
          <g id="" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="" transform="translate(-120.000000, -200.000000)">
                  <g id="" transform="translate(120.000000, 200.000000)">
                      <g id="" transform="translate(15.000000, 15.000000) rotate(-360.000000) translate(-15.000000, -15.000000) ">
                          <rect id="Rectangle" transform="translate(15.000000, 15.000000) scale(1, -1) translate(-15.000000, -15.000000) " x="0" y="0" width="30" height="30"></rect>
                          <path d="M22.5,19.6891 C22.2508097,19.6905407 22.0112989,19.5927124 21.834375,19.417225 L15,12.573475 L8.165625,19.417225 C7.79801046,19.7848396 7.20198954,19.7848396 6.834375,19.417225 C6.46676046,19.0496105 6.46676046,18.4535896 6.834375,18.085975 L14.334375,10.585975 C14.5104062,10.4084944 14.7500273,10.3086641 15,10.3086641 C15.2499727,10.3086641 15.4895938,10.4084944 15.665625,10.585975 L23.165625,18.085975 C23.3431056,18.2620062 23.4429359,18.5016273 23.4429359,18.7516 C23.4429359,19.0015727 23.3431056,19.2411938 23.165625,19.417225 C22.9887011,19.5927124 22.7491903,19.6905407 22.5,19.6891 Z" id="Path" fill="#1EAAE6" fill-rule="nonzero" transform="translate(15.000800, 15.000800) scale(1, -1) rotate(-90.000000) translate(-15.000800, -15.000800) "></path>
                      </g>
                  </g>
              </g>
          </g>
      </svg> BACK TO NEWS</a>
      <div class="post-image mt-5">
        <?php   $image = get_field("inner_image"); ?>
        <img class="border-top-right-radius" src="<?=$image['url'];?>"/>
      </div>
    </div><!--container-->
  </section>

  <section class="post-section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="post-meta">
            <?php
              $author = get_the_author_meta('display_name',$post->post_author);
              $author_picture = get_field("user_picture","user_".$post->post_author);
              $author_position = get_field("position","user_".$post->post_author);
            ?>
            <div class="post-date"><?=date("M d, Y",strtotime($post->post_date));?></div>
            <div class="post-info">
              <div><img class="author-image" src="<?=$author_picture['sizes']['small-square']?>" /></div>
              <div class="ms-3">
                <div class="author-name"><?=$author;?></div>
                <div class="author-position"><?=$author_position;?></div>
              </div>
            </div><!--post-info-->
          </div><!--post-meta-->
        </div>
        <div class="col-lg-8">
          <div class="post-content">
            <h1><?=$post->post_title;?></h1>
            <?=get_the_content($post->ID);?>
          </div><!--post-content-->
        </div>
      </div><!--row-->
    </div><!--container-->
  </section>

<?php get_footer();?>
