<?php
/**
 * Template Name: Évènement
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */

// Obtenir l'entête
get_header();
?>

<main class="site__main">
<h1>-------TEMPLATE-ÉVÈNEMENT.PHP-------</h1>

    <!-- Page individuelle (Nouvelles, page d'exemple) -->
    <div class="site__main__single">

        <!-- S'il y a des articles, afficher cet article -->
        <?php if (have_posts()): the_post(); ?>

        <article class="evenement">

            <!-- Titre de la page individuelle -->
            <?php the_title(); ?>

            <section class="evenement__resume">
                <?php the_field('resume'); ?>
            </section>

            <p class="evenement__endroit">
                <?php the_field('endroit') ?>
            </p>

            <p class="evenement__date">
                <?php the_field('date') ?>
            </p>

            <p class="evenement__heure">
                <?php the_field('heure') ?>
            </p>

            <p>
                <?php the_field('organisateur') ?>
            </p>

            <?php
                $image = get_field('image');
            ?>

        </article>

        <!-- Texte de la page de présentation -->
        <?php the_content(); ?>
        <?php endif; ?>
    </div>
    
</main>

<!-- Obtenir le pied de page -->
<?php get_footer(); ?>