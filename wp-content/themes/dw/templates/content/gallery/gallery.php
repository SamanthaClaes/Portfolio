<?php $headline = get_sub_field('headline'); ?>
<?php $gallery = get_sub_field('gallery'); ?>

<section class="content-section__inner">
    <?php if (!empty($headline)): ?>
        <h2 class="content-section__title">
            <?= esc_html($headline) ?>
        </h2>
    <?php endif; ?>

    <?php if (!empty($gallery)): ?>
        <div class="gallery_flex_wrapper">
            <?php foreach ($gallery as $image): ?>
                <div class="gallery__item">
                    <?= responsive_image($image, ['classes' => 'project_card', 'lazy' => true]) ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Images non disponibles.</p>
    <?php endif; ?>
</section>
