<?php get_header();?>
  <section class="banner" id="homepage-banner">
    <?php $banner_image = get_field("banner_image");?>
    <?php
      $banner_video = get_field("banner_video");
    ?>
    <video autoplay muted loop class="background-video" poster="<?=$banner_image['sizes']['banner-image']?>">
      <source src="<?=$banner_video;?>" type="video/mp4">
    </video>
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="animatedParent animateOnce">
            <div class="banner-content animated fadeInUpShort text-left">
              <h1 class="page-title text-start"><?=nl2br(get_field("banner_title"));?></h1>
              <h2 class="page-subtitle text-start"><?=nl2br(get_field("banner_subtitle"));?></h2>
              <?php if($banner_button = get_field("banner_button")):?>
                <div class="text-start">
                  <a href="<?=$banner_button['url']?>" class="mp-button"><?=$banner_button['title']?></a>
                </div>
              <?php endif;?>
            </div><!--banner-content-->
          </div>
        </div>
        <div class="col-lg-5"></div>
      </div><!--row-->

    </div><!--container-->
  </section><!--banner-->

  <?php if($numbers = get_field("numbers")):?>
    <section class="section" id="numbers-section">
      <div class="container">
        <div class="animatedParent animateOnce">
          <div class="numbers animated fadeInDownShort">
            <div class="row">
              <?php foreach($numbers as $number):?>
                <div class="col-lg-3">
                  <div class="number">
                    <div class="number-icon"><img src="<?=$number['icon']?>" /></div>
                    <div class="num"><span class="counter"><?=$number['number']?></span><span><?= $number['sign'] ? $number['sign'] : ""?><span></div>
                    <h4><?=$number['title']?></h4>

                  </div><!--number-->
                </div><!--col-->
              <?php endforeach;?>
            </div><!--row-->
          </div><!--numbers-->
        </div><!--anim-->
      </div><!--container-->
    </section><!--numbers-section-->
  <?php endif;?>

  <div id="why-montypay" class="d-none d-lg-block">
    <div class="sections home-features">
      <?php $why_items = get_field("why_montypay_items","options"); ?>
      <?php $why_number = get_field("why_montypay_number", "options");?>
      <?php if($why_items):?>
            <div class="sticky-wrapper">
              <?php foreach($why_items as $key=>$item):?>
                  <?php if($key==$why_number) {break;}?>
                  <div class="feature">
                      <div id="feature-<?=$key?>" class="section-content feature-section <?= $key==0 ? 'sactive' : ''?>">
                        <h3><?=nl2br($item['subtitle']);?></h3>
                        <h2><?=nl2br($item['title']);?></h2>
                        <?=$item['short_description'];?>
                        <!-- <a class="read-more why-montypay" href="<?=get_permalink( get_page_by_path( 'why-montypay' ) );?>" target="">View All <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                        </svg></a> -->
                      </div><!--section-content-->
                      <div id="feature-media-<?=$key?>" class="feature-media <?= $key==0 ? 'mactive' : '' ?>">
                        <img class="border-bottom-left-radius" src="<?=$item['image']['sizes']['extra-large']?>')"/>
                      </div><!--feature-img-->
                  </div><!--feature-->
                <?php endforeach;?>
            </div><!--sticky-wrapper-->
            <div class="scrollers">
              <?php foreach($why_items as $key=>$item):?>
                <?php if($key==$why_number) {break;}?>
                <div class="feature-scroller feature-scroller-<?=$key?>" data-id="<?=$key?>"></div>
              <?php endforeach;?>
            </div><!--scrollers-->

      <?php endif;?>
    </div>
  </div><!--why-montypay-->
  <div id="why-montypay-mobile" class="d-block d-lg-none">
    <section class="section">
      <div class="sections home-features">
        <?php $why_items = get_field("why_montypay_items","options"); ?>
        <?php $why_number = get_field("why_montypay_number", "options");?>
        <?php if($why_items):?>
          <div class="why-montypay-slider">
            <?php foreach($why_items as $key=>$item):?>
                <?php if($key==$why_number) {break;}?>
                <div class="featue">
                  <div class="feature-media">
                    <img class="border-top-right-radius" src="<?=$item['image']['sizes']['extra-large']?>'"/>
                  </div>
                  <div class="container section-content feature-setion mt-5">
                    <h3><?=nl2br($item['subtitle']);?></h3>
                    <h2><?=nl2br($item['title']);?></h2>
                    <?=$item['short_description'];?>
                    <a class="read-more why-montypay" href="<?=get_permalink( get_page_by_path( 'why-montypay' ) );?>" target="">View All <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                    </svg></a>
                    <!-- <i class="fas fa-caret-square-left s-arrows left-arrow-why-montypay"></i> -->
                    <!-- <i class="fas fa-caret-square-right s-arrows right-arrow-why-montypay"></i> -->
                  </div>
                </div>
              <?php endforeach;?>
          </div>
        <?php endif;?>
      </div>
    </section>
  </div>
  <script type="text/javascript">
    $('.why-montypay-slider').slick({
      slidesToShow: 1,
      arrows: true,
      dots: true,
    });
  </script>


  <section class="section d-none d-md-block"></section>

  <div id="montypay-features" class="d-none d-lg-block">
    <?php $montypay_features = get_field("montypay_features","options"); ?>
    <?php $features_number = get_field("montypay_features_number", "options");?>
    <?php if($montypay_features):?>
      <section class="section with-numbers">
        <div class="sticky-wrapper sticky-wrappper-top">
            <?php foreach($montypay_features as $key=>$feature):?>
              <?php if($key==$features_number) {break;}?>
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-5 order-3 order-md-1">
                    <div class="feature-two-media <?= $key==0 ? 'mactive' : ''?>" id="feature-two-media-<?=$key?>">
                      <img class="feature-image" src="<?=$feature['image']['sizes']['large']?>" />
                    </div>
                  </div><!--col-lg-->
                  <div class="col-lg-2 d-none d-md-block order-2 order-md-2">
                    <div class="feature-number feature-number-desktop feature-two-number  <?= $key==0 ? 'mactive' : ''?>" id="feature-two-number-<?=$key?>"><?=$key+1?></div>
                  </div><!--col-lg-->
                  <div class="col-lg-5 order-1 order-md-3">
                    <div class="section-content feature-two-section <?= $key==0 ? 'mactive' : ''?>" id="feature-two-section-<?=$key?>">
                      <h3><?=nl2br($feature['subtitle']);?></h3>
                      <h2><?=nl2br($feature['title']);?></h2>
                      <?=$feature['short_description'];?>
                        <div class=" mt-5">
                      <a class="read-more features" href="<?=get_permalink( get_page_by_path( 'features' ) );?>" target="">View All <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                    </svg></a></div>
                    </div><!--section-content-->
                  </div><!--col-lg-->
                </div><!--row-->
              </div>
            <?php endforeach;?>
          </div><!--sticky-wrapper-->
          <div class="scrollers">
            <?php foreach($why_items as $key=>$item):?>
              <?php if($key==$why_number) {break;}?>
              <div class="feature-two-scroller feature-two-scroller-<?=$key?>" data-id="<?=$key?>"></div>
            <?php endforeach;?>
          </div><!--scrollers-->
      </section><!--why-montypay-->
    <?php endif;?>
  </div>
  <div id="montypay-features-mobile" class="d-block d-lg-none">
    <section class="section">
      <?php if($montypay_features):?>
        <div class="container why-mp-slider">
          <?php foreach($montypay_features as $key=>$feature):?>
            <?php if($key==$features_number) {break;}?>
            <div class="why-mp-slider-wrapper">
              <div class="feature-two-media" id="feature-two-media-<?=$key?>">
                <img class="feature-image" src="<?=$feature['image']['sizes']['large']?>" />
              </div>
              <div class="section-content feature-two-section" id="feature-two-section-<?=$key?>">
                <h3><?=nl2br($feature['subtitle']);?></h3>
                <h2><?=nl2br($feature['title']);?></h2>
                <?=$feature['short_description'];?>
                <a class="read-more features" href="<?=get_permalink( get_page_by_path( 'features' ) );?>" target="">View All <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                </svg></a>
                <!-- <i class="fas fa-caret-square-left s-arrows left-arrow-montypay-features"></i> -->
                <!-- <i class="fas fa-caret-square-right s-arrows right-arrow-montypay-features"></i> -->
              </div><!--section-content-->
            </div>
          <?php endforeach;?>
        </div>
      <?php endif;?>
    </section>
  </div>

  <script type="text/javascript">
    $('.why-mp-slider').slick({
      slidesToShow: 1,
      arrows: true,
      dots: true,
    });
  </script>

<section class="section with-bg gradient-bg bg-border-radius animatedParent animateOnce" id="testimonials-section">
    <div class="container">
      <div class="section-content text-center animated fadeInUpShort">
        <h3><?=get_field("testimonials_subtitle");?></h3>
        <h2><?=nl2br(get_field("testimonials_title"));?></h2>
        <div id="testimonials">
          <?php $testimonials = get_field("testimonials");?>
          <?php if($testimonials):?>
            <?php foreach($testimonials as $key=>$testimonial):?>
              <div class="testimonial">
                <div class="tdescription">
                  <p>"<?=$testimonial['description'];?>"</p>
                </div>
                <div class="tmeta">
                  <img src="<?=$testimonial['picture']['sizes']['large']?>" />
                  <div>
                    <h4><?=$testimonial['name'];?></h4>
                    <h5><?=$testimonial['position'];?></h5>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          <?php endif;?>
        </div>
      </div>
    </div>
    <script type="text/javascript">
   $('#testimonials').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 2,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1
            }
          }
        ],
    });
    </script>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-content text-center">
        <div class="animatedParent animateOnce">
          <h3 class="animated fadeInDownShort"><?=get_field("integration_subtitle")?></h3>
          <h2 class="animated fadeInUpShort"><?=get_field("integration_title")?></h2>
        </div>
        <div class="integration-plugins animatedParent animateOnce" data-sequence="150">
          <?php $plugins = get_field("ecommerce_plugins","options");?>
          <?php foreach($plugins as $key=>$plugin):?>
            <div class="iplugin animated fadeInDownShort" data-id="<?=$key?>">
              <img src="<?=$plugin['image']['sizes']['large']?>" />
            </div><!--iplugin-->
          <?php endforeach;?>

          <?php $plugins = get_field("sdk","options");?>
          <?php foreach($plugins as $key=>$plugin):?>
            <div class="iplugin animated fadeInDownShort" data-id="<?=$key+5?>">
              <img src="<?=$plugin['image']['sizes']['large']?>" />
            </div><!--iplugin-->
          <?php endforeach;?>

        </div><!--integration-plugins-->
      </div><!--section-content-->
    </div><!--container-->
  </section>

<?php get_footer();?>
