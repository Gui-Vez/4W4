<!-- Obtenir l'entête -->
<?php get_header() ?>

<main class="search__main">
    <!-- <h1>-------SEARCH-------</h1> -->

    <!-- S'il y a des articles, -->
    <?php if (have_posts()) : ?>

        <!-- Boucle contenant les articles -->
        <?php while (have_posts()): the_post(); ?>
            
            <!-- Obtenir le lien de l'article -->
            <a href="<?php echo get_permalink(); ?>">
                <h3>
                    <!-- Afficher le titre du cours -->
                    <?php the_title(); ?>
                </h3>
            </a>

            <!-- Afficher la description du cours -->
            <p><?php echo wp_trim_words(get_the_content(), 20, "...>"); ?></p>

            <!-- Barre horizontale -->
            <hr>

        <?php endwhile; ?>

    <!-- Sinon, -->
    <?php else : ?>

        <!-- Afficher un message d'erreur -->
        <h3>Aucun résultat.</h3>
        <br>
        <p>Recommencez votre requête en choisissant bien les mots dans la barre de recherche.</p>
    
    <?php endif; ?>
</main>

<!-- Obtenir le pied de page -->
<?php get_footer() ?>