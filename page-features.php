<?php get_header();?>
  <?= get_template_part("template-parts/page-header"); ?>
  <div id="all-features">
    <?php $features = get_field("montypay_features","options");?>
    <?php
      $br = true;
      $i = 0;
    ?>
    <?php foreach($features as $key=>$feature):?>
      <?php
        if($feature['hide']){
          continue;
        }
        $class = "";
        $reverse = "";

        if(($i+1)%2==0){
          $class = "gradient-bg with-bg";
          if($br){
            $class .= " bg-border-radius with-bg";
            $br = false;
          }else{
            $br = true;
          }
          $reverse = "flex-row-reverse";
        }
      ?>
      <section class="section feature <?=$class?>" id="<?=sanitize_title($feature['title'])?>">
        <div class="container">
          <div class="row align-items-center <?=$reverse?> animatedParent animateOnce ">
            <div class="col-lg-4 text-center">
              <img class="feature-image animated fadeInUpShort" src="<?=$feature['image']['sizes']['large']?>" />
            </div><!--col-lg-->
            <div class="col-lg-1"></div>
            <div class="col-lg-7">
              <div class="section-content animated fadeInUpShort">
                <h2><?=nl2br($feature['title']);?></h2>
                <?=$feature['long_description'];?>
                <?php if($feature['list']):?>
                  <div class="row">
                    <?php foreach($feature['list'] as $key=>$list):?>
                      <div class="col-lg-6">
                        <div class="special-list">
                          <span><?=$key+1?></span>
                          <p><?=$list['title'];?></p>
                        </div>
                      </div>
                    <?php endforeach;?>
                  </div>
                <?php endif;?>

                <?php if($feature['icon_text']):?>
                  <div class="row">
                    <?php foreach($feature['icon_text'] as $key=>$ic):?>
                      <div class="col-lg-6">
                        <div class="icon-text">
                          <div class="icon-title">
                            <div class="icon-bg">
                              <img src="<?=$ic['icon']?>" />
                            </div><!--icon-bg-->
                            <h4><?=$ic['title'];?></h4>
                          </div>
                          <p><?=$ic['description']?></p>
                        </div>
                      </div>
                    <?php endforeach;?>
                  </div>
                <?php endif;?>

              </div><!--section-content-->
            </div><!--col-lg-->
          </div><!--row-->
        </div>
      </section><!--why-montypay-->
      <?php $i++;?>
    <?php endforeach;?>
  </div><!--all-features-->
<?php get_footer();?>
