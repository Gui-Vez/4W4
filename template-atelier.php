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
<h1>-------TEMPLATE-ATELIER.PHP-------</h1>

    <!-- Page individuelle (Nouvelles, page d'exemple) -->
    <div class="site__main__single">

        <!-- S'il y a des articles, afficher cet article -->
        <?php if (have_posts()): the_post(); ?>        

        <article class="atelier">

            <!-- Titre de la page individuelle -->
            <?php the_title(); ?>
        

            <!-- Champs personnalisés -->
            


        </article>

        <!-- Texte de la page de présentation -->
        <?php the_content(); ?>
        <?php endif; ?>
    </div>
    
</main>

<!-- Obtenir le pied de page -->
<?php get_footer(); ?>