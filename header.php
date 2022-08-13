<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <meta name="description" content="<?php bloginfo('description') ?>" />
    <meta name="keywords" content="" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- ogp -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <!-- ファビコン -->
    <!-- <link rel="”icon”" href="" /> -->
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css" integrity="sha256-GzSkJVLJbxDk36qko2cnawOGiqz/Y8GsQv/jMTUrx1Q=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/themes/material_blue.css" integrity="sha256-vxrocMyy3+x+gmiNuoCS5Iv5rEurStwP6vnN5Mr1PfA=" crossorigin="anonymous">
    
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <?php
    function check($param)
    {
        $url = esc_url($_SERVER['REQUEST_URI']); //ドメイン直下のURLを抽出する。例えばhttps://hoge.net/product/urethane/だったら結果は/product/urethane/ トップページの場合は/のみ
        if (is_front_page() && $param === 'home') {
            echo 'is_active';
        }
        if (strpos($url, $param) !== false) {
            //含まれている場合の処理を書く
            echo 'is_active';
        } else {
            //含まれていない場合の処理を書く
            echo '';
        }
    }
    ?>
    <!-- header -->
    <header class="header">
        <div class="header_inner">
            <h1 class="header_logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="logo" />
                </a>
            </h1>
            <nav class="header_nav">
                <ul class="header_nav_list">
                    <li class="header_nav_link header_nav_link_01 <?php check('home'); ?>">
                        <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                    </li>
                    <li class="header_nav_link header_nav_link_02 <?php check('about'); ?>">
                        <a href="<?php echo esc_url(home_url('/about')); ?>">当院について</a>
                    </li>
                    <li class="header_nav_link header_nav_link_03 <?php check('medical'); ?>">
                        <a href="<?php echo esc_url(home_url('/medical')); ?>">診療案内</a>
                    </li>
                    <li class="header_nav_link header_nav_link_04 <?php check('staff'); ?>">
                        <a href="<?php echo esc_url(home_url('/staff')); ?>">スタッフ紹介</a>
                    </li>
                    <li class="header_nav_link header_nav_link_05 <?php check('blog'); ?>">
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">スタッフブログ</a>
                    </li>
                    <li class="header_nav_link header_nav_link_06 <?php check('contact'); ?>">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
                    </li>
                </ul>
                <div class="header_nav_right">
                    <div class="header_nav_address">
                        〒166-0001 東京都杉並区阿佐谷北7-3-1
                    </div>
                    <div class="header_nav_tel">03-1234-5678</div>
                </div>
            </nav>
            <div class="drawer_button" id="on">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- ドロワーメニュー -->
    <div class="drawer_menu">
        <div class="drawer_menu_inner">
            <div class="drawer_menu_header">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="drawer_logo">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo-drawer.svg')); ?>" alt="logo" />
                </a>
            </div>
            <ul class="drawer_menu_list">
                <li class="drawer_menu_link menu_1">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-01sp.svg')); ?>" alt="icon" /><span>ホーム</span></a>
                </li>
                <li class="drawer_menu_link menu_2">
                    <a href="<?php echo esc_url(home_url('/about')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-02sp.svg')); ?>" alt="icon" /><span>当院について</span></a>
                </li>
                <li class="drawer_menu_link menu_3">
                    <a href="<?php echo esc_url(home_url('/medical')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-03sp.svg')); ?>" alt="icon" /><span>診療案内</span></a>
                </li>
                <li class="drawer_menu_link menu_4">
                    <a href="<?php echo esc_url(home_url('/staff')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-04sp.svg')); ?>" alt="icon" /><span>スタッフ紹介</span></a>
                </li>
                <li class="drawer_menu_link menu_5">
                    <a href="<?php echo esc_url(home_url('/blog')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-05sp.svg')); ?>" alt="icon" /><span>スタッフブログ</span></a>
                </li>
                <li class="drawer_menu_link menu_6">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-06sp.svg')); ?>" alt="icon" /><span>お問い合わせ</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 予約ボタンSP用 -->
    <div class="reserve_button_sp">
        <div class="reserve_button_tel">
            <a href="tel:03-1234-5678">03-1234-5678</a>
        </div>
        <a href="<?php echo esc_url(home_url('/web')); ?>" class="reserve_button_web">WEB予約<span>はこちら</span></a>
    </div>
