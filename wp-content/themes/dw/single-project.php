<?php get_header(); ?>

<?php include('templates/content/stage/stage.php') ?>
<?php include('templates/content/flexible.php') ?>

    <div class="project-list">
        <?php
        $projects = new WP_Query([
            'post_type' => 'project',
            'orderby' => 'rand',
            'posts_per_page' => 3,
            'post__not_in' => [$post->ID]
        ]);

        if ($projects->have_posts()): while ($projects->have_posts()):
            $projects->the_post();
            $title = get_the_title();
            $image = get_field('image', get_the_ID());
            $text = get_field('text', get_the_ID());
            $permalink = get_the_permalink();
            ?>
            <a href="<?= $permalink; ?>" class="project-card__link">
                <article class="project-card">
                    <?php /* Le "a" est en dehors de la carte "story__card" afin de pouvoir
                        garder un lien propre (accessibilité), rajouter du contenu utile
                        (référençabilité) tout en gardant un design attractif. */ ?>
                    <span class="sro"> <?= __hepl('Accéder à ce projet') ?></span>
                    <div class="project-card__content">
                        <h3 class="project-card__title"><?= $title ?></h3>
                        <?= responsive_image($image, ['classes' => 'cards_projects', 'lazy' => true]) ?>
                    </div>
                </article>
            </a>

        <?php endwhile; else: ?>
            <p>Je n'ai aucun projet a vous montrer.</p>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>