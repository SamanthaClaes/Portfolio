<?php /* template Name: Template "A propos"*/ ?>
<?php get_header();?>
<h2>A propos de moi</h2>
<?php
//on ouvre "la boucle" (the loop), la strcuture de contrôle de contenu propre a wp
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div><?php the_content();?></div>

<?php endwhile; else: ?>
    <!--// on ferme la boucle-->
    <p>Pas de contenu à afficher. </p>
<?php endif;?>
<?php get_footer()?>
