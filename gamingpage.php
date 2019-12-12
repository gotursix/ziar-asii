<?php
/*
Template Name: Gaming Page
*/

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

            <hr>
        </main>

        <?php
        $args = array( 'category' => 4, 'post_type' =>  'post' );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post);
            ?>

            <?php //var_dump($post);?>

            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h3><?php the_excerpt(); ?></h3>

        <?php endforeach; ?>

    </div><!-- #primary -->

<?php
get_footer();
