<?php get_header(); ?>

<main class="main" role="main">
    
    <div class="container">
        
        <div class="hero"><h1>Burning your eyes?</h1><br><p>Toggle Dark Mode and we'll remember to never burn your eyes again!</p><button onclick="nightmode()">Dark Mode</button>

<button onclick="daymode()">Light Mode</button></div>
        <div class="cards">
        <?php while (have_posts()) : the_post(); ?>
            <div class="card">
                
                <div class="card--image">
                    <a href="<?php the_permalink(); ?>"><img src=	
                    <?php the_post_thumbnail('featuredImageCropped'); ?></a>
                </div>
                <div class="card--title"><?php echo get_the_title( $post_id ); ?></div>
                <div class="card--text">
                <?php the_excerpt(); ?>
                </div>
                <div class="card--info">
                    
                    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="50" data-layout="box_count" data-action="like" data-size="small" data-share="false"></div>
                    
                        <div class="views"></div><div><a href="<?php the_permalink(); ?>">Read More</a></div>
                
                </div>
            </div>
            <?php endwhile; ?>
        </div>  
        

    </div>
    
</div>
<div class="sidebar">sidebarstuff</div>
        
    
</main>

<?php get_footer(); ?>
