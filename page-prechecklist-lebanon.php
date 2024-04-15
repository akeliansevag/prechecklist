<?php get_header();?>
<style>
    body {
      padding-top: 70px;
    }
    @media only screen and (max-width: 992px){
      body {
        padding-top: 40px;
      }
    }
</style>
<section id="precheck-application" class="section animatedParent animateOnce">
    <div class="container section-content  animated fadeInDownShort">
        <h2 class="text-center">Pre-Check Lebanon</h2>
        <div class="row">
        <div class="col-lg-2"></div><!--col-lg-3-->
        <div class="col-lg-8">
          <div class="precheck-form mp-form">
            <?=do_shortcode(get_field("precheck_form_shortcode"));?>
          </div><!--precheck-form-->
        </div><!--col-lg-6-->
        <div class="col-lg-2"></div><!--col-lg-3-->
      </div><!--row-->
    </div><!--container-->
  </section>
  <?php get_footer();?>