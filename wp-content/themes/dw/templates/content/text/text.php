<?php $headline = get_sub_field('headline') ?>
<?php $text = get_sub_field('text') ?>
<?php $link = get_sub_field('link') ?>
<?php $image = get_sub_field('image') ?>
<?php $class = get_sub_field('cs_class') ?>

<div class="content-section">
    <section class="content-section__inner">
        <?php if (!empty($headline)): ?>
            <h2 class="content-section__title content-section__project">
                <?= $headline ?>
            </h2>
        <?php endif; ?>
        <div class="content-section__card">
            <?php if (!empty($text)): ?>
                <div class="content-section__text">
                    <?= $text ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if (!empty($link)): ?>
        <div class="div-btn_container">
            <a class="<?= $class !== '' ? $class : '' ?>" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"
               title="<?= $link['title'] ?>"><?= $link['title'] ?></a>
        </div>
        <?php endif; ?>
    </section>
</div>










