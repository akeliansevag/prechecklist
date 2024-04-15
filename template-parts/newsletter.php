<section class="section with-bg bg-border-radius dark-bg newsletter-section" id="newsletter">
  <div class="container animatedParent animateOnce">
    <div class="section-content text-center">
      <div class="animatedParent animateOnce">
        <div class="animated fadeInDownShort">
          <h3><?=get_field("footer_subtitle","options");?></h3>
          <h2><?=get_field("footer_title","options");?></h2>
          <div class="newsletter-form">
            <?=do_shortcode(get_field("newsletter_form_shortcode","options"));?>
          </div>
        </div>
      </div>
      <div class="social-icons">
        <div class="animatedParent animateOnce" data-sequence="300">
          <?php $icons = get_field("social_icons","options");?>
          <?php foreach($icons as $key=>$icon):?>
            <a class="<?=$icon['class']?> animated fadeInDownShort" href="<?=$icon['link']['url']?>" target="<?=$icon['link']['target']?>" data-id="a-<?=$key?>">
              <?=$icon['icon'];?>
            </a>
          <?php endforeach;?>
        </div>
      </div><!--social-icons-->
    </div><!--section-content-->
  </div><!--container-->
</section>
