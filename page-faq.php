<?php get_header();?>
  <?= get_template_part("template-parts/page-header");?>
  <?php $faq = get_field("faq");?>

  <?php 
    foreach($faq as $k=>$f):
      if($k % 2 != 0){
        $classes = 'gradient-bg bg-border-radius with-bg';
      }
      else{
        $classes = '';
      }
    ?>
      <section class="section <?= $classes ?>">
        <div class="container">
          <div class="animatedParent animateOnce">
            <div class="faq-section animated fadeInUpShort">
              <h2 class='section-subtitle'><?=$f['title'];?></h2>
                <div class="accordion accordion-flush" id="accordionFlush-<?=$k?>">
                  <?php foreach($f['items'] as $key=>$acc):?>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-<?=$key."-".$k?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item-<?=$key."-".$k?>" aria-expanded="false" aria-controls="flush-<?=$key."-".$k?>">
                          <?=$acc['question']?>
                        </button>
                      </h2>
                      <div id="item-<?=$key."-".$k?>" class="accordion-collapse collapse" aria-labelledby="flush-<?=$key."-".$k?>" data-bs-parent="#accordionFlush-<?=$k?>">
                        <div class="accordion-body">
                          <?=$acc['answer'];?>
                        </div>
                      </div>
                    </div>
                  <?php endforeach;?>
              </div>
            </div><!--faq-section-->
          </div>
        </div><!--container-->
      </section>
  <?php endforeach;?>
    
<?php get_footer();?>
