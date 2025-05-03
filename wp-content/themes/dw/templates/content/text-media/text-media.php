<?php $supline = get_sub_field('supline') ?>
<?php $headline = get_sub_field('headline') ?>
<?php $subline = get_sub_field('subline') ?>
<?php $text = get_sub_field('text') ?>
<?php $cta = get_sub_field('cta') ?>
<?php $image = get_sub_field('image') ?>
<?php $media_position = get_sub_field('media_position') ?>
<?php $media_type = get_sub_field('media_type') ?>

<section class="text-media">
    <div class="text-media__content-container">
        <?php if ($supline !== '' && isset($supline)): ?>
            <p class="text-media__content-supline">
                <?= $supline ?>
            </p>
        <?php endif; ?>
        <?php if ($headline !== '' && isset($headline)): ?>
            <h2 class="text-media__content-headline">
                <?= $headline ?>
            </h2>
        <?php endif; ?>
        <?php if ($supline !== '' && isset($supline)): ?>
            <p class="text-media__content-subline">
                <?= $supline ?>
            </p>
        <?php endif; ?>
        <?php if ($text !== '' && isset($text)): ?>
            <div class="text-media__content-text">
                <?= $text ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($cta)): ?>
            <a class="text-media__content-link"
               href="<?= $cta['url'] ?>"
               title="<?= $cta['title'] ?>">
                <?= $cta['title'] ?>
            </a>
        <?php endif; ?>
    </div>
    <?php if (!empty($image)): ?>
        <div class="text-media__position text-media__position--<?= $media_position ?>">
            <?= responsive_image($image, ['classes' => 'text-media__image', 'lazy' => true]) ?>
        </div>
    <?php endif; ?>
</section>