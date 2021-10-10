<?php

get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    // Display post content
                    endwhile;
                endif;
                ?>


            </div>
    </section>
</main>


<?php get_footer(); ?>