<?php get_header();?>
  <?= get_template_part("template-parts/page-header");?>
  
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <div class="section-content text-center animatedParent animateOnce">
            <h3 class="animated fadeInDownShort"><?=get_field("section_1_subtitle");?></h3>
            <h2 class="animated pulse"><?=nl2br(get_field("section_1_title"));?></h2>
            <div class="animated fadeInUpShort"><?=get_field("section_1_description");?></div>
          </div>
        </div><!--col-->
        <div class="col-lg-1"></div>
      </div><!--row-->
      <br><br>
      <?php if($section_1_button = get_field("section_1_button")):?>
        <div class="animatedParent animateOnce">
          <div class="text-center animated fadeInUpShort">
            <a href="<?=$section_1_button['url']?>" class="mp-button"><?=$section_1_button['title']?></a>
          </div>
        </div>
      <?php endif;?>
    </div><!--container-->
  </section>



  <section class="section with-bg mt-0 dark-bg" id="get-started">
    <div class="container">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="section-content text-center animatedParent animateOnce">
            <div class="animated fadeInUpShort">
              <h3><?=get_field("section_3_subtitle");?></h3>
              <h2><?=get_field("section_3_title");?></h2>
              <?=get_field("section_3_description");?>
            </div>
          </div>
        </div>
        <div class="col-lg-3"></div>
      </div><!--row-->
      <div class="row mt-4">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="animatedParent animateOnce">
            <div class="mp-form dark-form big-input animated fadeInDownShort">
              <select name="country" class="selectpicker" id="pricing-country" data-live-search="true">
                <?php $rates = get_field("pricing_rates");?>
                  <option value="">Select Country</option>
                <?php foreach($rates as $key=>$rate):?>
                  <?php 
                    if($rate['link'] == 'Link'){ ?>
                      <option value="other" data-redirect="<?=get_permalink( get_page_by_path( 'apply-now' ) );?>"><?=$rate['country'];?></option>
                    <?php } else { ?>
                      <option value="<?=$rate['country']?>" data-specs='<?=json_encode($rate['specs'])?>' data-terms="<?=$rate['terms']?>" data-international="<?=$rate['international_rate']?>" data-local="<?=$rate['local_rate'];?>" data-premium="<?=$rate['local_premium_rate'];?>" data-cards="<?=$rate['uk_cards'];?>" data-apm='<?=json_encode($rate['accepted_payment_methods']);?>'><?=$rate['country']?></option>
                    <?php } ?>
                <?php endforeach;?>
                <option value="other" data-redirect="<?=get_permalink( get_page_by_path( 'apply-now' ) );?>">Other</option>
              </select>
              <div class="no-location"><?=get_field("no_location");?></div>
            </div><!--mp-form-->
          </div>
        </div>
        <div class="col-lg-3"></div>
      </div><!--row-->
      <div class="row animatedParent animateOnce">

          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="rate-container animated fadeInDownShort">
              <h4>Local Rate</h4>
              <div id="local-rate" class="pricing-result"></div>
            </div>
            <div class="rate-container animated fadeInDownShort premium-field">
              <h4>Local Premium Cards</h4>
            <div id="premium-rate" class="pricing-result"></div>
            </div>

            <div class="rate-container animated fadeInDownShort uk-cards">
             <h4>
           UK Cards
               </h4>
              <div id="uk-cards" class="pricing-result"></div>
            </div>
            <div class="rate-container animated fadeInUpShort">
              <h4>International Rate</h4>
              <div id="international-rate" class="pricing-result"></div>
            </div>
          </div>
          <div class="col-lg-1"></div>
      </div><!--row-->
      <?php if($section_3_button = get_field("section_3_button")):?>
        <div class="separator"></div>
        <div class="animatedParent animateOnce">
          <div class="text-center animated fadeIn">
            <a href="<?=$section_3_button['url']?>" class="mp-button"><?=$section_3_button['title']?></a>
          </div>
        </div>

      <?php endif;?>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <ul class="small-tick-items" id="specs"></ul>
        </div>
        <div class="col-lg-3"></div>
      </div>

      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="price-terms" id="terms"></div>
        </div>
        <div class="col-lg-3"></div>
      </div>
      <div class="row mt-5 pb-3">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <div class="price-note">
            <?=get_field("section_3_note");?>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div><!--row-->

    <div class="apm-container d-none text-center">  
      <div class="line my-5 m-auto"></div>
      <div class="row pt-3 m-auto">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="section-content text-center animatedParent animateOnce">
            <div class="animated fadeInUpShort">
              <h2 class="d-none apm-title">Accepted Payment Methods</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-3"></div>
      </div><!--row-->
      <div class="mt-5">
        <div class="section-content text-center">
          <h3 class="apm-cp d-none">Card Payments</h3>
          <div id="apm-cp" class="price-apm-wrapper"></div>

          <h3 class="apm-ew d-none mt-5 pt-5">E-Wallets</h3>
          <div id="apm-ew" class="price-apm-wrapper"></div>
          
          <h3 class="apm-bt d-none mt-5 pt-5">Bank Transfers</h3>
          <div id="apm-bt" class="price-apm-wrapper"></div>
        </div>
      </div>
      </div>
    </div><!--container-->
  </section>

  <!-- <section class="section mb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <div class="section-content text-center animatedParent animateOnce">
            <div class="animated fadeInUpShort">
              <h3><?=get_field("section_2_subtitle");?></h3>
              <h2><?=get_field("section_2_title");?></h2>
              <?=get_field("section_2_description");?>
            </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">
          <?php $items = get_field("section_2_items");?>
            <ul class="tick-items animatedParent animateOnce" data-sequence="350">
              <?php foreach($items as $key=>$item):?>
                <li data-id="<?=$key?>" class="animated fadeInUpShort"><span><svg width="" height="" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8198 6.19526C20.0601 6.45561 20.0601 6.87772 19.8198 7.13807L9.9736 17.8047C9.73328 18.0651 9.34364 18.0651 9.10332 17.8047L4.18024 12.4714C3.93992 12.2111 3.93992 11.7889 4.18024 11.5286C4.42056 11.2682 4.8102 11.2682 5.05053 11.5286L9.53846 16.3905L18.9495 6.19526C19.1898 5.93491 19.5794 5.93491 19.8198 6.19526Z" fill="#ffffff"/>
              </svg></span><?=$item['title'];?></li>
              <?php endforeach;?>
            </ul>
        </div>
      </div>

    </div>
  </section> -->
<?php get_footer();?>
