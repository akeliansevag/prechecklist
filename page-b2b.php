<?php get_header();?>
  <?=get_template_part("template-parts/page-header");?>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="section-content animatedParent animateOnce">
            <div class="animated fadeInDownShort text-center">
              <h3><?=get_field("section_1_subtitle");?></h3>
              <h2><?=get_field("section_1_title");?></h2>
              <?=get_field("section_1_description");?>
              <a href="<?=get_permalink( get_page_by_path( 'apply-now' ) );?>" class="mp-button mt-4">Request a Free Demo</a>
            </div>

          </div><!--section-->
        </div><!--col-->
      </div><!--row-->
    </div><!--container-->
  </section>

  <section class="section">
    <div class="container">
      <div class="section-content animatedParent animateOnce text-center">
        <div class="animated fadeInDownShort">
          <h3><?=get_field("section_2_subtitle");?></h3>
          <h2><?=get_field("section_2_title");?></h2>
        </div>
      </div><!--section-content-->
      <?php $items = get_field("items");?>
      <div class="b2b-services row">
        <?php foreach($items as $key=>$item):?>
          <div class="col-12 col-sm-6 col-lg-4 p-3">
            <div class="b2b-service">
              <div class="b2b-service-icon">
                <?=$item['icon'];?>
              </div>

              <div class="b2b-service-description">
                <h3><?=nl2br($item['title'])?></h3>
                <span><?=$item['description'];?></span>
              </div>
            </div><!--service-->
          </div>
        <?php endforeach;?>
      </div><!--services-->
      <div class="text-center mt-4">
        <a href="<?=get_permalink( get_page_by_path( 'contact-us' ) );?>" class="mp-button">Contact our Experts Today</a>
      </div>
    </div>
  </section>

<?php get_footer();?>
