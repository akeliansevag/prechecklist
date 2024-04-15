<section class="banner-section">
  <div class="container">

        <div class="banner-content">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="animatedParent animateOnce">
                <h1 class="animated fadeInDownShort"><?=get_field("page_title");?></h1>
                <div class="breadcrumbs animated fadeInUpShort">
                  <?=wpd_nav_menu_breadcrumbs( 'main-menu' )?>
                </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
          </div><!--row-->
          <?php $image = get_field("banner_image");?>
          <!-- <div class="animatedParent animateOnce">
            <div class="page-image animated fadeInUpShort" style="background-image:url('<?=$image['sizes']['banner-image'];?>')">

            </div>banner-image
          </div> -->
        </div><!--banner-content-->


  </div><!--container-->
</section>
