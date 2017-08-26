<?php
/*
 * Template Name: Blog Post
 * Template Post Type: post
 */
get_header(); 
?>
<?php get_header(); ?>

    <div class="main-content">

        <div class="left-page-content">
                
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="blog-page-content">
 
                        <h2 class="inner-title"><?php the_title(); ?></h2>
                            
                            <div class="category-post">

                                <h6 class="article-meta-extra">
                                    
                                    Posted on <?php the_date(get_option('date_format')); ?> at <?php the_time(get_option('time_format')); ?> | <?php the_category('  |  '); ?> | By <?php the_author_posts_link(); ?>
                                    
                                </h6>
                                
                            </div>

                    <?php the_content(); ?>  
                        
        <?php endwhile; ?>
                        
        <?php else : ?>
                        
                <article class="no-posts">

                    <h1>No Posts Were Found</h1>

                </article>
                        
        <?php endif; ?>

          
            </div>
          
        <div class="clearfix"></div>

    </div><!-- END MAIN-CONTENT -->
    
</div><!-- END wrap_1280 -->

<?php get_footer(); ?>
