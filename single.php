<?php include 'head.php'; ?>
 <?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>
<div class="posts">
        <div class="post-single">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <div class="post-info">
                <span class="post-author">
                <i class="fa fa-user"><h4><?php the_author();?></h4></i>
                </span>
                <span class="post-timestamp">
                <i class="fa fa-clock-o"><h4><?php the_time('d M Y'); ?></h4></i>
                </span>
                </div>
        </div>
        <div class="post-sing">
            <div class="post-p">
            <p><?php the_content('مشاهدة المزيد...'); ?></p>
            </div>
    </div>
    </div>
   <?php endwhile; ?>
<?php else : ?>
<p>Not found</p>
<?php endif; ?>


<?php get_footer(); ?>
    </body>
</html>