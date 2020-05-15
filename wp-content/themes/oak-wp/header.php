<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <logo>🎆 <a href="<?= home_url(); ?>">S . I . T . E - L . O . G . O</a></logo>
    <nav>
        <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
    </nav>
</header>