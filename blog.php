<section id="blog" class="blog">
<div class="container">
<h2 class="wow slideInDown">آخر
    <span>
    المقالات
    </span>
    </h2>  
<p class="wow slideInDown">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
    <?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>
<div class="posts wow slideInDown">
        <div class="post">
            <div class="post-img">
            <?php the_post_thumbnail(); ?>
                </div>
        <h3 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
            <div class="post-p">
            <p><?php the_content('مشاهدة المزيد'); ?></p>
            </div>
    </div>
    </div>
   <?php endwhile; ?>
<?php else : ?>
<p>Not found</p>
<?php endif; ?>


<?php wp_reset_postdata(); ?>
</div>
</section>