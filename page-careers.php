<?php get_header();?>
  <?=get_template_part("template-parts/page-header");?>
  <section class="section animatedParent animateOnce">
    <div class="mp-career-image">
      <?php $image = get_field("careers_image"); ?>
      <img src="<?=$image['sizes']['extra-large']?>" width="100%"/>
    </div>

    <div class="container animated fadeInUpShort">
      <div class="section-content">
        <h3><?=get_field("careers_subtitle");?></h3>
        <h2><?=get_field("careers_title")?></h2>
        <?=get_field("careers_description")?>
      </div><!--section-content-->
      
      <div class="row">
        <!-- <div class="col-lg-3"></div> -->
        <div class="col-lg-6">
          <div class="mp-form">
            <?=do_shortcode(get_field("careers_form_shortcode"));?>
          </div><!--mp-form-->
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
          <i class="fas fa-angle-left s-arrows left-arrow-careers d-none d-md-block"></i>
          <i class="fas fa-angle-right s-arrows right-arrow-careers d-none d-md-block"></i>
        </div>
      </div><!--section-content-->
      <?php $items = get_field("items");?>
      <div class="careers-page">
        <?php foreach($items as $key=>$item):?>
          <div class="career">
            <div class="career-icon">
              <?=$item['icon'];?>
              <div class="career-location">
                  <img src="<?=$item['location_image']['url'];?>" title="<?=$item['location_image']['alt'];?>" alt="">
              </div>
            </div>

            <div class="career-description">
              <h3><?=nl2br($item['title'])?></h3>
            </div>

            <div class="career-text">
              <?=$item['description'];?>
            </div>

            <div class="career-link">
              <a href="<?=$item['link']['url'];?>" target="_blank" class="mp-button"><?=$item['button_text'];?></a>
            </div>
          </div><!--career-->
        <?php endforeach;?>
      </div><!--careers-->
    </div>

      <script type="text/javascript">
        var slides = 3;
        var careerSlides = $(".career").length;
        if(careerSlides <= slides){
          $('.left-arrow-careers').removeClass('d-md-block');
          $('.right-arrow-careers').removeClass('d-md-block');
        }
      $('.careers-page').slick({
          slidesToShow: slides,
          arrows: true,
          prevArrow: $('.left-arrow-careers'),
          nextArrow: $('.right-arrow-careers'),
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
<?php get_footer();?>
