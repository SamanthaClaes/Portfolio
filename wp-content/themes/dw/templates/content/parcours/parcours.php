<?php $headline = get_sub_field('headline') ?>
<?php $experiences = get_sub_field('experiences') ?>
<?php $class = get_sub_field('cs_class') ?>

<section>
    <h2 class="section_container_title"><?= $headline ?></h2>
    <div class="parcours__grid <?= $class !== '' ? $class : '' ?>">
        <?php foreach ($experiences as $ex): ?>
            <article class="parcours">
                <h3 class="content-section__title"><?= $ex['year'] ?></h3>
                <div class="content-section__card">
                    <?= $ex['experience'] ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>