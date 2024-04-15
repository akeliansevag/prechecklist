<?php get_header();?>
 <?=get_template_part("template-parts/page-header");?>
 <?php
    $items = get_field("why_montypay_items","options");
 ?>
 <?php if($items):?>
   <div class="montypay-items">
     <?php foreach($items as $key=>$item):?>
       <?php
          $br = "border-bottom-left-radius";
          $reverse = "";
          $left_image = "";
          if(($key+1)%2==0){
            $br = "border-top-right-radius";
            $reverse = "flex-row-reverse";
            $left_image = "left-image";
          }

       ?>
       <section class="section feature no-margin" id="<?=sanitize_title($item['title'])?> ">
         <div class="section-image <?=$br?> <?=$left_image?> " style="background-image:url('<?=$item['image']['sizes']['extra-large']?>');
  
        "></div>
         <div class="container">
           <div class="row <?=$reverse?> animatedParent animateOnce">
             <div class="col-lg-5">
                 <div class="section-content animated fadeInUpShort">
                   <h2><?=$item['title'];?></h2>
                   <?=$item['description'];?>
                   <?php if($item['accordion']):?>
                     <div class="accordion accordion-flush" id="accordionFlushExample">
                       <?php foreach($item['accordion'] as $key=>$acc):?>
                         <div class="accordion-item">
                           <h2 class="accordion-header" id="flush-<?=$key?>">
                             <button class="accordion-button <?=$key!=0 ? "collapsed" : ""?>" type="button" data-bs-toggle="collapse" data-bs-target="#item-<?=$key?>" aria-expanded="false" aria-controls="flush-<?=$key?>">
                               <?=$acc['title']?>
                             </button>
                           </h2>
                           <div id="item-<?=$key?>" class="accordion-collapse collapse <?= $key==0 ? "show" : "" ?>" aria-labelledby="flush-<?=$key?>" data-bs-parent="#accordionFlushExample">
                             <div class="accordion-body">
                               <?=$acc['description'];?>
                             </div>
                           </div>
                         </div>
                       <?php endforeach;?>
                    </div>
                   <?php endif;?>
                 </div><!--section-content-->
             </div>
             <div class="col-lg-7"></div>
           </div><!--row-->
         </div>
       </section>
     <?php endforeach;?>
  </div><!--montypay-items-->
 <?php endif;?>
 

<?php get_footer();?>
