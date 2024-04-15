<?php get_header();?>
  <?=get_template_part("template-parts/page-header");?>
  <section class="section">
  <div class="container">
    <?php $items = get_field("items");?>
    <div class="api-items animatedParent animateOnce">
      <?php foreach($items as $key=>$item):?>
        <div class="api-item animated fadeInDownShort">
          <div class="section-content">
            <h2><?=$item['title'];?></h2>
            <?=$item['description']?>
            <?php
              $text_download = "Download PDF";
              $text_link = "Link";
            ?>
            <div class="api-links">
              <?php if($item['link']):?>
                <a target="_blank" href="<?=$item['link']?>"><?=$text_link?> <?=get_field("link_icon","options");?></a>
              <?php endif;?>
              <?php if($item['file']):?>
                <a href="<?=$item['file']?>" target="_blank"><?=$text_download?> <?=get_field("download_icon","options");?></a>
              <?php endif;?>
            </div>
          </div><!--section-content-->
        </div><!--api-item-->
      <?php endforeach;?>
    </div><!--api-items-->
  </div><!--container-->
  </section>
<?php get_footer();?>
