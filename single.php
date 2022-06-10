<?php get_header(); ?> 
<div class="hero__titre">
<h1>single page Mon premier modèle Wordpress</h1>
</div>
<div class="container">
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><hr><?php the_content();?><hr></p>
        <?php
            $titre = get_the_title();
            $sigle = substr($titre, 0, 8);
            $heure = substr($titre, -6);
        ?>
        <code><?= $sigle ?></code>
        <code><?= $heure ?></code>

    <?php endwhile; ?>
<?php endif; ?>
</div>
<br>

<?php get_footer(); ?>