<?php $headline = get_sub_field('headline') ?>
<?php $text = get_sub_field('text') ?>
<?php $link = get_sub_field('link') ?>
<?php $image = get_sub_field('image') ?>
<?php $class = get_sub_field('cs_class') ?>

<div class="div_container_section">
    <section class="section_container <?= $class !== '' ? $class : '' ?>">
        <?php if (!empty($headline)): ?>
            <h2 class="div_project_h2">
                <?= $headline ?>
            </h2>
        <?php endif; ?>
        <div class="parcours_card">
            <?php if (!empty($text)): ?>
                <div class="div_project_text">
                    <?= $text ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($link)): ?>
            <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"
               title="<?= $link['title'] ?>"><?= $link['title'] ?></a>
        <?php endif; ?>
    </section>
</div>










