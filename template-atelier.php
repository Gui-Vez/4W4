<?php
/**
 * Template Name: Atelier
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */

// Obtenir l'entête
get_header();
?>

<main class="site__main">
<!-- <h1>-------TEMPLATE-ATELIER.PHP-------</h1> -->

    <!-- Page individuelle (Nouvelles, page d'exemple) -->
    <div class="site__main__single">

        <!-- S'il y a des articles, afficher cet article -->
        <?php if (have_posts()): the_post(); ?>        

        <article class="atelier">

            <h1>
                <!-- Titre de la page individuelle -->
                <?php the_title(); ?>
            </h1>

            <h3>Description de l'atelier</h3>

            <!-- Champs personnalisés -->

            <p class="atelier__animateur">
                L'animateur de l'atelier : <span class="champ"><?php the_field('animateur'); ?></span>
            </p>

            <p class="atelier__local">
                L'atelier sera donné au local : <span class="champ"><?php the_field('local'); ?></span>
            </p>

            <section class="atelier__description">
                <p><?php the_field('description'); ?></p>
            </section>


            <h3>Horaire et dates de l'atelier</h3>

            <p class="atelier__duree">
                Durée de chacune des séances est de <span class="champ"><?php the_field('duree'); ?> heures</span>
            </p>

            <p class="atelier__dates">
                Date de début : <span class="champ"><?php the_field('date_debut'); ?></span><br>
                Date de fin : <span class="champ"><?php the_field('date_fin'); ?></span>
            </p>

            <p class="atelier__jours">
                La formation se donnera : <span class="champ"><?php the_field('jours'); ?></span>
            </p>

            <p class="atelier__horaire">
                L'horaire : De <span class="champ"><?php the_field('heure_debut'); ?></span> à <span class="champ"><?php the_field('heure_fin'); ?></span>
            </p>

        </article>

        <!-- Texte de la page de présentation -->
        <?php the_content(); ?>
        <?php endif; ?>
    </div>
    
</main>

<!-- Obtenir le pied de page -->
<?php get_footer(); ?>