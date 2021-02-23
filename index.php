<?php
    get_header();

    while(have_posts()){
        the_post();
        ?>
        
        <p><?php the_permalink() ?>"></p>
        <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
        <section><?php the_content() ?></section>

    <?php
    }
    get_footer();
