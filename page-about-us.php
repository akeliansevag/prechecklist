<?php get_header();?>
  <?=get_template_part("template-parts/page-header");?>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-content animatedParent animateOnce">
            <div class="animated fadeInDownShort">
              <h3><?=get_field("section_1_subtitle");?></h3>
              <h2><?=get_field("section_1_title");?></h2>
              <?=get_field("section_1_description");?>
            </div>

          </div><!--section-->
        </div><!--col-->
      </div><!--row-->
    </div><!--container-->
  </section>

  <section class="section">
    <div class="container">
      <div class="section-content animatedParent animateOnce">
        <div class="animated fadeInDownShort">
          <h3><?=get_field("section_2_subtitle");?></h3>
          <h2><?=get_field("section_2_title");?></h2>
          <i class="fas fa-angle-left s-arrows left-arrow-services d-none d-md-block"></i>
          <i class="fas fa-angle-right s-arrows right-arrow-services d-none d-md-block"></i>
        </div>
      </div><!--section-content-->
      <?php $items = get_field("items");?>
        <div class="services">
          <?php foreach($items as $key=>$item):?>
            <div class="service">
              <div class="service-icon">
                <?=$item['icon'];?>
              </div>

              <div class="service-description">
                <h3><?=nl2br($item['title'])?></h3>
                <span><?=$item['description'];?><span>
              </div>
            </div><!--service-->
          <?php endforeach;?>
        </div><!--services-->
      </div>

      <script type="text/javascript">
        var slides = 3;
        var serviceSlides = $(".service").length;
        if(serviceSlides <= slides){
          $('.left-arrow-services').removeClass('d-md-block');
          $('.right-arrow-services').removeClass('d-md-block');
        }
      $('.services').slick({
          slidesToShow: slides,
          arrows: true,
          prevArrow: $('.left-arrow-services'),
          nextArrow: $('.right-arrow-services'),
          dots: false,
          autoplay: false,
          autoplaySpeed: 3000,
          infinite: false,
          responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 1.25
              }
            }
          ]
      });
      </script>
  </section>

  <div id="why-montypay" class="d-none d-lg-block">
    <div class="sections home-features">
      <?php $s3items = get_field("section_3_items"); ?>
      <?php if($s3items):?>
            <div class="sticky-wrapper">
              <?php foreach($s3items as $key=>$item):?>
                  <div class="feature">
                      <div id="feature-<?=$key?>" class="section-content feature-section <?= $key==0 ? 'sactive' : ''?>">
                        <h3><?=nl2br($item['subtitle']);?></h3>
                        <?php if($item['title']):?><h2><?=nl2br($item['title']);?></h2><?php endif;?>
                        <?=$item['description'];?>
                      </div><!--section-content-->
                      <div id="feature-media-<?=$key?>" class="feature-media <?= $key==0 ? 'mactive' : '' ?>">
                        <img class="border-bottom-left-radius" src="<?=$item['image']['sizes']['extra-large']?>')"/>
                      </div><!--feature-img-->
                  </div><!--feature-->
                <?php endforeach;?>
            </div><!--sticky-wrapper-->
            <div class="scrollers">
              <?php foreach($s3items as $key=>$item):?>
                <div class="feature-scroller feature-scroller-<?=$key?>" data-id="<?=$key?>"></div>
              <?php endforeach;?>
            </div><!--scrollers-->
      <?php endif;?>
    </div>
  </div><!--why-montypay-->

    <div id="why-montypay" class="d-block d-md-none">
      <section class="section">
        <div class="sections home-features">
          <?php $s3items = get_field("section_3_items"); ?>
          <?php if($s3items):?>
            <div class="why-montypay-slider-about-us">
              <?php foreach($s3items as $key=>$item):?>
                  <div class="feature">
                    <div class="feature-media">
                      <img class="border-top-right-radius" src="<?=$item['image']['sizes']['extra-large']?>'"/>
                    </div><!--feature-img-->
                    <div class="section-content feature-section">
                      <h3><?=nl2br($item['subtitle']);?></h3>
                      <?php if($item['title']):?><h2><?=nl2br($item['title']);?></h2><?php endif;?>
                      <?=$item['description'];?>
                    </div><!--section-content-->
                  </div><!--feature-->
                <?php endforeach;?>
            </div><!--sticky-wrapper-->
          <?php endif;?>
        </div>
      </section>
    </div><!--why-montypay-->
  <script type="text/javascript">
    $('.why-montypay-slider-about-us').slick({
      slidesToShow: 1,
      arrows: true,
      dots: true,
    });
  </script>
<?php get_footer();?>
