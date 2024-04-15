<?php get_header();?>
  <?=get_template_part("template-parts/page-header");?>
  <div class="container">
    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-content animatedParent animateOnce">
            <div class="animated fadeInUpShort">
              <h3><?=get_field("section_1_subtitle");?></h3>
              <h2><?=get_field("section_1_title");?></h2>
              <?=get_field("section_1_description");?>
              <?php if($link = get_field("section_1_link")):?>
                <a class="mp-link" href="<?=$link['url']?>" target="<?=$link['target']?>"><?=$link['title']?>
                  <?=get_field("link_icon","options");?>
                </a>
              <?php endif;?>
            </div>

          </div><!--section-content-->
        </div><!--col-->
      </div><!--row-->
      <?php $sdk = get_field("sdk","options");?>
      <div class="ecommerce-plugins">
        <div class="row animatedParent animateOnce">
            <?php foreach($sdk as $key=>$p):?>
              <div class="col-6 col-lg-4">
                <?php
                  $sLink = "";
                  if($p['file']){
                    $sLink = $p['file'];
                  }

                  if($p['link']){
                    $sLink = $p['link'];
                  }

                ?>
                  <div class="ecommerce-plugin animated fadeInDownShort">
                    <?php if($sLink):?>
                      <a href="<?=$sLink?>" target="_blank">
                        <div class="hover-overlay">
                          <span>
                            <?php
                              if($p['link']){
                                echo get_field("link_icon","options").' Link';
                              }elseif ($p['file']) {
                                echo get_field("download_icon","options").' Download';
                              }

                            ?>
                          </span>
                        </div>

                      </a>
                    <?php endif;?>
                    <img class="image-small" src="<?=$p['image']['sizes']['large']?>" />
                    <div class="ecommerce-plugin-icon"><h6><?=get_field("link_icon","options");?></h6></div>
                  </div><!--ecommerce-plugin-->
              </div><!--col-->
            <?php endforeach;?>
        </div><!--row-->
      </div><!--ecommerce-plugins-->

    <!--<div id="montypay-features">
      <?php $items = get_field("section_2_items"); ?>
      <?php if($items):?>
        <section class="section with-numbers">
          <div class="sticky-wrapper">
              <?php foreach($items as $key=>$feature):?>
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-lg-4">
                      <div class="feature-two-media <?= $key==0 ? 'mactive' : ''?>" id="feature-two-media-<?=$key?>">
                        <div class="item-icon">
                            <img class="feature-image" src="<?=$feature['icon']?>" />
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="feature-number feature-two-number text-center <?= $key==0 ? 'mactive' : ''?>" id="feature-two-number-<?=$key?>"><?=$key+1?></div>
                    </div>
                    <div class="col-lg-5">
                      <div class="section-content feature-two-section <?= $key==0 ? 'mactive' : ''?>" id="feature-two-section-<?=$key?>">
                        <h3><?=nl2br($feature['subtitle']);?></h3>
                        <h2><?=nl2br($feature['title']);?></h2>
                        <?=$feature['description'];?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>
            </div>
            <div class="scrollers">
              <?php foreach($items as $key=>$item):?>
                <div class="feature-two-scroller feature-two-scroller-<?=$key?>" data-id="<?=$key?>"></div>
              <?php endforeach;?>
            </div>
        </section>
      <?php endif;?>
    </div>-->



      <div class="section-content animatedParent animateOnce">
        <div class="animated fadeInDownShort">
          <h3><?=get_field("section_3_subtitle");?></h3>
          <h2><?=get_field("section_3_title");?></h2>
        </div>

        <?php $plugins = get_field("ecommerce_plugins","options");?>
        <div class="ecommerce-plugins">
          <div class="row animatedParent animateOnce" data-sequence="350">
              <?php foreach($plugins as $key=>$p):?>
                <div class="col-6 col-lg-4">
                  <?php $file = $p['file'];?>
                    <div class="ecommerce-plugin animated fadeInDownShort" data-id="s<?=$key?>">
                      <?php if($file):?>
                        <a href="<?=$file?>" target="_blank">
                          <div class="hover-overlay">
                            <span>
                              <?=get_field("download_icon","options")?> Download
                            </span>
                          </div>

                        </a>
                      <?php endif;?>
                      <img class="image-small" src="<?=$p['image']['sizes']['large']?>" />
                      <div class="ecommerce-plugin-icon"><h6><?=get_field("download_icon","options");?></h6></div>
                    </div><!--ecommerce-plugin-->
                </div><!--col-->
              <?php endforeach;?>
          </div><!--row-->
        </div><!--ecommerce-plugins-->

      </div><!--section-content-->
    </section>
  </div><!--container-->
<?php get_footer();?>
