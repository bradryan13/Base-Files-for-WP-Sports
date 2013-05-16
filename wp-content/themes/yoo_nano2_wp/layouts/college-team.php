<div id="system">  
    <h3>My Custom Page</h3>  
    <?php if (have_posts()) : ?>  
        <?php while (have_posts()) : the_post(); ?>  

        <article class="item">  

            <header>  

                <h1 class="title"><?php the_title(); ?>Is this working?</h1>  

            </header>  

            <div class="content clearfix"><?php the_content(''); ?></div>  
            
            <h1><?php the_field('head_coach'); ?></h1>

            <?php edit_post_link(__('Edit this post.', 'warp'), '<p class="edit">','</p>'); ?>  

        </article>  

        <?php endwhile; ?>  
    <?php endif; ?>  

    <?php comments_template(); ?>  

</div>