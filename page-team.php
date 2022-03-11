<?php include 'head.php'; ?>

<div class="container">
<section class="team">
<h2>
    فريق
<span>
  العمل
</span>    
</h2>
    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
    <div class="personal">
    <div class="cover"></div>
    <div class="user">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/madhoun.png"/>
    </div>
    <h2>محمد<span>المدهون</span></h2>
    <p>مطور ويب </p>
     <ul class="social list-unstyled list-inline">
     <li><a href=""><span class="fa fa-facebook"></span></a></li>
     <li><a href=""><span class="fa fa-twitter"></span></a></li>
     </ul>
    </div>

    <div class="personal">
    <div class="cover"></div>
    <div class="user">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/krizem.png"/>
    </div>
    <h2>محمد<span>كريزم</span></h2>
    <p>تسويق</p>
     <ul class="social list-unstyled list-inline">
     <li><a href=""><span class="fa fa-facebook"></span></a></li>
     <li><a href=""><span class="fa fa-twitter"></span></a></li>
     </ul>
    </div>
    
    <div class="personal">
    <div class="cover"></div>
    <div class="user">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/anas.png"/>
    </div>
    <h2>أنس <span>شكران</span></h2>
    <p>موشن جرافيك</p>
     <ul class="social list-unstyled list-inline">
     <li><a href=""><span class="fa fa-facebook"></span></a></li>
     <li><a href=""><span class="fa fa-twitter"></span></a></li>
     </ul>
    </div>
</section>
</div>
<?php get_footer(); ?>