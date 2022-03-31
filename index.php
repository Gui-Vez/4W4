<!-- Obtenir l'entête -->
<?php get_header() ?>

<main class="principal">
    <h1>-------INDEX-------</h1>
    <section class="formation">
        <!--  Titre de la page principale -->
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        
        <!-- Liste des formations -->
        <div class="formation__liste">

            <!-- S'il y a des articles, -->
            <?php if (have_posts()):
                // Créer une boucle contenant tous les articles
                while (have_posts()): the_post(); ?>

                <!-- Un exemple d'article -->
                <article class="formation__cours">
                        <?php
                        // Créer les valeurs de l'article
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descCours = get_the_excerpt();
                        ?>

                        <!-- Afficher le contenu de l'article -->
                        <h3 class="cours__titre"> <?= $titreFiltreCours; ?></h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                    </article>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>

<!-- Obtenir le pied de page -->
<?php get_footer() ?>