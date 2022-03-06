<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="web developpeur et photographe pour les entrepreneurs et créateurs">
    <meta name="keywords" content="web developer, création de sites, photographe, portraits, photos branding, ateliers de patisserie">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Puis le lien du Font de google généré qd tu choisis la police-->
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">

    <!--Fontawsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!--Bootstrap si besoin-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <?php wp_head() ?>

    <title>Tiffany Boubkeur</title>
</head>


<body>
    <header id="home">
        <!-- Background header et nav -->
        <section class="nav">
            <a href="<?= home_url('/'); ?>" title="<?= __('Homepage', 'monTheme') ?>">
                <img src="<?= get_theme_mod('logo') ?>" alt="Tiffany Boubkeur logo" class="logo">
            </a>
            <input type="checkbox" class="burger fas">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container'      => false,
                'menu_class'     => 'nav_menu'
            ]); ?>
        </section>

        <!-- Titre et slogan -->
        <section>
            <h1><strong>TITRE</strong></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt adipisci labore autem natus numquam sed, facere ducimus. Error sequi in quas blanditiis, excepturi illo quo eveniet cupiditate explicabo natus harum!</p>

        </section>
    </header>