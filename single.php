<?php get_header(); ?>

<main class="main" role="main">
    <div class="container">
    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="50" data-layout="box_count" data-action="like" data-size="small" data-share="true"></div>
        <div class="postcontent">
            <div class="post-image"><img src=<?php the_post_thumbnail(); ?> </div>
        
        

        <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?>>


                <header class="post__header" role="heading">
                    <h1 class="post__title"><?php the_title(); ?></h1>
                </header>

                <?php the_content(); ?>

                <footer class="post__footer">
                    <p class="post__date"><time><?php echo human_time_diff(strtotime($post->post_date)) . ' ' . __('ago'); ?></time></p>
                    <p class="post__comments"><?php comments_popup_link(__('No comments yet'), __('1 comment'), __('% comments')); ?></p>
                </footer>

            </article>

        <?php endwhile; ?>
        </div>
    </div>
    
    <div class="sidebar">
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
