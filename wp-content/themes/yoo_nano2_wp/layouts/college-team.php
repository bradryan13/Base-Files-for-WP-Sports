<div id="system">  
    <h3>My Custom Page</h3>  
    <?php if (have_posts()) : ?>  
        <?php while (have_posts()) : the_post(); ?>  

        <article class="item">  

  

            <div class="content clearfix"><?php the_content(''); ?></div>  
            
            <h1><?php the_field('head_coach'); ?></h1>
            
                        
            <?php acf_form( $options ); ?>

        </article>  

        <?php endwhile; ?>  
    <?php endif; ?>  

    <?php comments_template(); ?>  

</div>