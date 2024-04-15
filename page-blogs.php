<?php get_header();?>
  <?=get_template_part("template-parts/page-header");?>
  <?php
    if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
    elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
    else { $paged = 1; }
    $query = new WP_Query([
      'post_type'=>'post',
      'posts_per_page'=>10,
      'paged'=>$paged,
      'category_name' => 'blogs' 

    ]);
    $posts = $query->posts; 
  ?>
  <section class="section">
    <div class="container">
      <?php if($posts):?>
          <?php foreach($posts as $post):?>
            <div class="animatedParent animateOnce">
              <div class="post animated fadeInUpShort">
                <div class="post-meta">
                  <?php
                    $author = get_the_author_meta('display_name',$post->post_author);
                    $author_picture = get_field("user_picture","user_".$post->post_author);
                    $author_position = get_field("position","user_".$post->post_author);
                  ?>
                  <div class="post-date"><?=date("M d, Y",strtotime($post->post_date));?></div>
                  <div class="post-info">
                    <div><img class="author-image" src="<?=$author_picture['sizes']['small-square']?>" /></div>
                    <div>
                      <div class="author-name"><?=$author;?></div>
                      <div class="author-position"><?=$author_position;?></div>
                    </div>
                  </div><!--post-info-->
                </div><!--post-meta-->
                <div class="row">
                  <div class="col-lg-6">
                    <div class="post-content">

                      <?php
                          $thumbnail = get_the_post_thumbnail_url($post->ID,"sa-blog-thumbnail-size");
                          $permalink = get_permalink($post->ID);
                          $target = "";
                          if($external_link = get_field("external_link")){
                            $permalink = $external_link;
                            $target = "_blank";
                          }
                      ?>
                      <h2><a href="<?=$permalink?>" target="<?=$target?>"><?=$post->post_title?></a></h2>
                      <p><?=$post->post_excerpt;?></p>
                      <p><a class="read-more" href="<?=$permalink?>" target="<?=$target?>">Read more <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>C5B442EC-DEFE-4538-A53B-2EFDC2791A10</title>
                          <g id="" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Subpage/News-Listing" transform="translate(-229.000000, -2303.000000)">
                                  <g id="" transform="translate(120.000000, 1805.000000)">
                                      <g id="" transform="translate(0.000000, 487.000000)">
                                          <g id="" transform="translate(109.000000, 11.000000)">
                                              <rect id="Rectangle" transform="translate(8.000000, 8.000000) scale(1, -1) rotate(90.000000) translate(-8.000000, -8.000000) " x="0" y="0" width="16" height="16"></rect>
                                              <path d="M13.6987292,11.4995913 C13.5392736,11.5005132 13.386012,11.4379133 13.2727993,11.3256199 L8.89951956,6.94634115 L4.52623981,11.3256199 C4.29100525,11.5608545 3.90961467,11.5608545 3.67438011,11.3256199 C3.43914554,11.0903854 3.43914554,10.7089948 3.67438011,10.4737602 L8.47358971,5.67455061 C8.58623112,5.56098172 8.73956338,5.49710084 8.89951956,5.49710084 C9.05947574,5.49710084 9.21280801,5.56098172 9.32544942,5.67455061 L14.124659,10.4737602 C14.2382279,10.5864016 14.3021088,10.7397339 14.3021088,10.8996901 C14.3021088,11.0596462 14.2382279,11.2129785 14.124659,11.3256199 C14.0114464,11.4379133 13.8581847,11.5005132 13.6987292,11.4995913 Z" id="Path" stroke="#1EAAE6" fill="#1EAAE6" fill-rule="nonzero" transform="translate(8.900031, 8.499573) scale(1, -1) rotate(90.000000) translate(-8.900031, -8.499573) "></path>
                                          </g>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg></a></p>
                    </div><!--section-title-->
                  </div><!--col-6-->

                  <div class="col-lg-1"></div>

                  <div class="col-lg-5">
                    <!--<img class="post-thumbnail border-top-right-radius-slight" src="<?=$thumbnail;?>"/>-->
                    <a href="<?=$permalink?>" target="<?=$target?>"><img class="post-thumbnail border-top-right-radius-slight" src="<?=$thumbnail;?>"/></a>
                  </div><!--col-5-->
                </div><!--row-->
              </div><!--post-->
            </div>

          <?php endforeach;?>
      <?php endif;?>
    </div><!--container-->
  </section>
  <section class="">
    <div class="container">
      <div class="mp-pagination">
        <?php
              $big = 999999999; // need an unlikely integer

              echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $query->max_num_pages,
                'next_text'=> "<i class='fa fa-chevron-right'></i>",
                'prev_text'=> "<i class='fa fa-chevron-left'></i>"
              ) );
        ?>
      </div><!--pagination-->
    </div><!--container-->
  </section>
<?php get_footer();?>
