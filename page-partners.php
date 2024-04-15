<?php get_header();?>
  <?=get_template_part("template-parts/page-header");?>
  <section class="section">
    <div class="container">
      <div class="section-content animatedParent animateOnce">
        <div class="row animated fadeInUpShort">
          <div class="col-lg-10">
            <h3><?=get_field("section_1_subtitle");?></h3>
            <h2><?=get_field("section_1_title");?></h2>
            <?=get_field("section_1_description");?>
          </div><!--col-lg-10-->
        </div><!--row-->
      </div><!--section-content-->
      <div class="rewards-section">
        <?php $rewards = get_field("rewards");?>
        <div class="animatedParent animateOnce">
          <div class="animated fadeInDownShort">
              <h3><?=$rewards['rewards_title'];?></h3>
          </div>
        </div>

        <div class="rewards">
          <div class="row animatedParent animateOnce" data-sequence="200">
            <?php foreach($rewards['rewards_items'] as $key=>$r):?>
              <div class="col-lg-3 animated fadeInUpShort" data-id="<?=$key?>">
                <div class="reward">
                  <div class="ricon"><img src="<?=$r['icon'];?>" /></div><!--ricon-->
                  <div class="rdescription"><?=$r['description'];?></div>
                </div><!--reward-->
              </div><!--col-lg-3-->
            <?php endforeach;?>
          </div><!--row-->
        </div><!--rewards-->
      </div><!--subsection-->
    </div><!--container-->
  </section>

    <!--<section class="section">
      <div class="container">
        <?php if($items = get_field("section_2_items")):?>
          <?php foreach($items as $key=>$item):?>
            <div class="partner-items  animatedParent animateOnce">
                <div class="row align-items-center animated fadeInUpShort">
                  <div class="col-lg-5 ">
                    <div class="item-icon">
                      <img src="<?=$item['icon']?>" />
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="feature-number"><?=$key+1?></div>
                  </div><
                  <div class="col-lg-5">
                    <div class="section-content">
                      <h3><?=nl2br($item['subtitle']);?></h3>
                      <h2><?=nl2br($item['title']);?></h2>
                      <?=$item['description'];?>
                    </div>
                </div>
            </div>
          <?php endforeach;?>
        <?php endif;?>
      </div>
    </section>-->

    <section class="section gradient-bg bg-border-radius with-bg-small with-bg mb-0 animatedParent animateOnce">
      <div class="container animated fadeInUpShort">
        <div class="section-content text-center">
            <h3><?=get_field("section_3_subtitle");?></h3>
            <h2><?=get_field("section_3_title");?></h2>
        </div><!--section-content-->
        <div class="ptypes">
          <?php $types = get_field("partner_types");?>
          <div class="row">
            <?php foreach($types as $key=>$type):?>
              <div class="col-lg-6">
                <a href="#become-a-partner">
                  <div class="ptype">
                    <div class="ptype-header">
                      <div class="ptype-icon">
                        <?=$type['icon'];?>
                      </div><!--ptype-icon-->
                      <h4><?=$type['title']?></h4>
                    </div><!--ptype-header-->
                    <div class="ptype-content">
                      <?=$type['description'];?>
                    </div><!--ptype-content-->
                  </div><!--ptype-->
                </a>
              </div><!--col-6-->
            <?php endforeach;?>
          </div><!--row-->
        </div><!--partner-types-->
      </div><!--container-->
    </section>

    <section class="section with-bg dark-bg mt-0 animatedParent animateOnce" id="become-a-partner">
      <div class="mp-partners-image">
        <?php $image = get_field("partners_image"); ?>
        <img src="<?=$image['sizes']['extra-large']?>" width="100%"/>
      </div>

      <div class="container animated fadeInUpShort">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-content">
              <h3><?=get_field("section_4_subtitle");?></h3>
              <h2><?=get_field("section_4_title");?></h2>
              <?=get_field("section_4_description");?>
            </div><!--section-content-->
          </div>
        </div><!--row-->
        <div class="row">
          <div class="col-lg-6">
            <div class="mp-form dark-form">
              <?=do_shortcode(get_field("partners_form_shortcode"));?>
            </div><!--mp-form-->
          </div><!--col-->
        </div><!--row-->
      </div><!--container-->
    </section>

    <section class="section">
      <div class="container">
        <div class="section-content text-center">
          <h3><?=get_field("section_5_subtitle");?></h3>
          <h2><?=get_field("section_5_title");?></h2>
        </div><!--section-content-->
        <?php $faq = get_field("partners_faq");?>
          <div class="faq-section">
              <div class="accordion accordion-flush animatedParent animateOnce" id="accordionFlush2">
                <?php foreach($faq as $key=>$acc):?>
                  <div class="accordion-item animated fadeInDownShort">
                    <h2 class="accordion-header" id="flush-<?=$key?>">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item-<?=$key?>" aria-expanded="false" aria-controls="flush-<?=$key?>">
                        <?=$acc['question']?>
                      </button>
                    </h2>
                    <div id="item-<?=$key?>" class="accordion-collapse collapse" aria-labelledby="flush-<?=$key?>" data-bs-parent="#accordionFlush2">
                      <div class="accordion-body">
                        <p><?=$acc['answer'];?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach;?>
             </div>
          </div><!--faq-section-->
      </div><!--container-->
    </section>
<?php get_footer();?>
