<?php get_header() ?>
<main class="principal">
    <!-- <h1>-------CATEGORY-COURS-------</h1> -->
    <section class="formation">
        <!-- Page de la liste des formations -->
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>

        <nav class="menu-categorie_cours-container">
            <?php if (is_category('cours')) : ?>
            <?php wp_nav_menu(array("menu" => "menu_cours")) ?>
        </nav>
        
        <div class="formation__liste">
            <!-- S'il y a des articles, -->
            <?php if (have_posts()):
                // Créer une boucle contenant les articles
                while (have_posts()): the_post(); ?>

                <?php       
                    $categories = get_the_category(); 
                ?>

                <!-- Afficher l'article du cours -->
                <article class="formation__cours" <?php echo $category[1] ?>>
                        <?php
                        // Créer les variables
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descCours = get_the_excerpt();
                        ?>

                        <!-- Afficher l'image du cours -->
                        <?php the_post_thumbnail('thumbnail') ?>

                        <!-- Afficher le titre du cours -->
                        <h3 class="cours__titre">
                            <!-- Accéder au lien de la page -->
                            <a href="<?php echo get_permalink(); ?>">
                                <?= $titreFiltreCours; ?>
                            </a>
                        </h3>

                        <!-- Afficher le nombre d'heures, le sigle et la description de chaque cours -->
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                    </article>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
    <?php endif; ?>
</main>

<!-- Obtenir le pied de page -->
<?php get_footer() ?>