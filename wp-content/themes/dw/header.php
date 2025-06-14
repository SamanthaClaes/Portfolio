<!DOCTYPE html>
<html lang="fr" itemscope itemtype="https://schema.org/WebSite">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title itemprop="name"><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <meta name="description" content="Samantha Claes web developper passionnée par le web depuis toujours">
    <link rel="canonical" href="https://portfolio.samantha-claes.be" />
    <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
    <script src="<?= dw_asset('js') ?>" defer></script>
</head>
<body class="wp_header" itemscope itemtype="https://schema.org/Organization">
<!--<h1 class="sro">--><?php //__('Portfolio Samantha Claes', 'hepl-trad')?><!--</h1>-->
<div class="site" role="document">
    <header role="banner" aria-label="En-tête du site">
        <div class="container_logo">
            <nav class="nav_header" role="navigation" aria-label="Menu principal">
<!--                <h2 class="sro">--><?php //__('Navigation principale', 'hepl-trad')?><!--</h2>-->
                <a href="<?= esc_url(home_url('/')); ?>" aria-label="Retour à l’accueil" itemprop="url">
                <svg class="house" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512" width="30"
                         height="30" role="img" aria-hidden="true" focusable="false">
                        <title>Accueil</title>
                        <path d="M493.2,193.5L331.4,31.6c-41.7-41.6-109.2-41.6-150.9,0L18.8,193.5C6.7,205.4,0,221.7,0,238.7v209.4c0,35.3,28.7,64,64,64h384c35.3,0,64-28.7,64-64v-209.4c0-17-6.7-33.3-18.8-45.2ZM320,469.5h-128v-83.9c0-35.3,28.7-64,64-64s64,28.7,64,64v83.9ZM469.3,448.1c0,11.8-9.6,21.3-21.3,21.3h-85.3v-83.9c0-58.9-47.8-106.7-106.7-106.7s-106.7,47.8-106.7,106.7v83.9h-85.3c-11.8,0-21.3-9.6-21.3-21.3v-209.4c0-5.7,2.3-11.1,6.3-15.1L210.7,61.9c25-24.9,65.5-24.9,90.5,0l161.8,161.8c4,4,6.2,9.4,6.3,15v209.4Z"/>
                    </svg>
                </a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle" aria-controls="main-menu"
                       aria-expanded="false"/>
                    <span class="sro"><?= __hepl('Ouvrir ou fermer le menu',[])?></span>
                <label for="menu-toggle" class="menu_icon" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <div id="main-menu" class="menu_links" role="menu" aria-hidden="true">
                    <?php
                    $links = dw_get_navigation_links('header');
                    foreach ($links as $link):?>
                        <a class="nav_main_menu" href="<?= esc_url($link->href) ?>" role="menuitem" itemprop="url">
                            <?= esc_html($link->label) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </nav>
        </div>
    </header>
    <main role="main">
