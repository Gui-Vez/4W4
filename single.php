<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package underscore
 */

// Obtenir l'entête
get_header();
?>

<main class="site__main">
<!-- <h1>-------SINGLE.PHP-------</h1> -->

    <!-- S'il y a des articles, afficher cet article -->
    <?php if (have_posts()): the_post(); ?>

    <!-- Contenant de l'article simple -->
    <div class="site__main__single">

        <!-- Titre de l'article simple -->
        <h3 class="site__main__single__titre">
            <?php the_title(); ?>
        </h3>

        <!-- Contenu de l'article simple -->
        <div class="article__contenu">

            <!-- S'il y a une image associée à l'article simple, -->
            <?php if (has_post_thumbnail()): ?>
                <!-- Afficher cette image -->
                <figure class="article__contenu__figure">
                    <?php the_post_thumbnail("thumbnail"); ?>
                </figure>
            <?php endif ?>

            <!-- Texte de l'article simple -->
            <h5 class="site__main__single__texte">
                <?php the_content(); ?>
            </h5>
        </div>

    </div>

    <?php endif; ?>
    
</main>

<!-- Obtenir le pied de page -->
<?php get_footer(); ?>