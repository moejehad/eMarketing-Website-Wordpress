<?php include 'head.php'; ?>

<section class="contat">

       <h2 class="wow slideInUp">تواصل معنا</h2>
    
    <div class="blocks">   
        
        
        <div class="contactSec">
            
             <h3 class="title">إتصل بنا</h3>
        <p>يسـعدنا دائماّ التواصل معكم من خلال احدي الوسائل التي بالأسفل ويمكنكم أيضاّ مراسلتنا عبر ارسال رسالة بريدية عن طريق هذا النموذج</p>
            
            <div class="contSec">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/phone.png" />
                <div class="right">
                <a>  : محمد عماد  <span>  +970597676047  </span></a>
                <a>  : محمد عماد  <span>  +970597676047  </span></a>
                </div>
            </div>
            
             <div class="contSec">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/message%20%E2%80%AB%E2%80%AC.png" />
                <div class="right">
          <a href="mailto:admin@raqameyyah.com"> :  الادارة  <span>  admin@raqameyyah.com  </span></a> 
                    <a href="mailto:apps@raqameyyah.com">  :  المبيعات<span>  apps@raqameyyah.com  </span> </a>
                    
                </div>
            </div>
            
            
        </div>
<div id="form" class="col-md-6 wow slideInDown">  
    
        <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>

</div> 
        
        </div>
    
    </section>


<?php get_footer(); ?>