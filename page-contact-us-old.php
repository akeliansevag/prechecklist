<?php get_header();?>
  <?= get_template_part("template-parts/page-header");?>
  <section class="section animatedParent animateOnce">
    <div class="container animated fadeInDownShort">
      <div class="section-content text-center">
        <h3><?=get_field("contact_us_subtitle");?></h3>
        <h2><?=get_field("contact_us_title");?></h2>
        <?=get_field("contact_us_description");?>
      </div><!--section-content-->

      <div class="row mt-5">
        <div class="col-lg-3"></div><!--col-lg-3-->
        <div class="col-lg-6">
          <div class="contact-us-form mp-form">
            <?=do_shortcode(get_field("contact_us_form_shortcode"));?>
          </div><!--contact-us-form-->
        </div><!--col-lg-6-->
        <div class="col-lg-3"></div><!--col-lg-3-->
      </div><!--row-->

    </div><!--container-->
  </section>
<?php get_footer();?>
