<?php get_header(); ?>

<main class="main" role="main">
    <div class="container">
    <div class="postcontent">

        <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?>>

                <header role="heading">
                    <h1 class="post__title"><?php the_title(); ?></h1>
                </header>

                <?php the_content(); ?>

            </article>

        <?php endwhile; ?>
        </div>
    </div>
    <div class="sidebar">
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
