<?php get_header();?>
<section class="section animatedParent animateOnce">
  <div class="container animated fadeInDownShort">
    <div class="section-content text-center">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <h2><?=get_field("page_title");?></h2>
        </div>
        <div class="col-lg-3"></div>

      </div><!--row-->
    </div><!--section-content-->

    <div class="row">
      <div class="col-lg-1"></div><!--col-lg-3-->
      <div class="col-lg-10">
        <div class="contact-us-form mp-form">
          <?=the_content();?>
        </div><!--contact-us-form-->
      </div><!--col-lg-6-->
      <div class="col-lg-1"></div><!--col-lg-3-->
    </div><!--row-->

  </div><!--container-->
</section>
<?php get_footer();?>
