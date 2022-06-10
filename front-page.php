<main>
    <div class="hero">
        <?php get_header(); ?> 
        <div class="hero__titre">
            <h1>Modèle Wordpress</h1>
        </div>
    </div>
        <?php
        if (have_posts()):
            while(have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>

                <?php $lien = " <a class='bouton' href='" . get_permalink() . "'>". substr(get_the_title(), 0, 8) ." </a><hr>"; ?>
                <p><?= wp_trim_words(get_the_content(), 20, $lien); ?></p>

            <?php endwhile; ?>
        <?php endif; ?>    

        <?php get_footer(); ?>
</main>