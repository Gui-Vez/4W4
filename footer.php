<footer class="site__footer">

    <!-- Première rangée de colonnes -->
    <div class="site__footer__colonne">

        <!-- Article de pied de page -->
        <section class="footer__article">
            <p><?php get_sidebar( 'footer_colonne_1' ); ?></p>
        </section>

        <!-- Adresse du collège -->
        <section class="footer__adresse">
            <?php get_sidebar( 'footer_colonne_2' ); ?>
            <p>Campus principal</p>
            <p>3800, rue Sherbrooke Est</p>
            <p>Montréal (Québec) H1X 2A2</p>
            <p>Tél.: 514 254-7131</p>
        </section>

        <!-- Liens externes -->
        <section class="footer__liens">
            <?php get_sidebar( 'footer_colonne_3' ); ?>
        </section>
    </div>
    
    <!-- Lignes pied de page -->
    <div class="footer_lignes">
        <?php get_sidebar( 'footer_ligne_1' ); ?>
        <h2 class="footer__titre">Vous ne trouvez pas ce que vous recherchiez ?</h2>
        <p class="footer__presentation">Essayez de cliquer sur ces liens ci-dessous...</p>
    </div>
<?php 

// Création des menus de Wordpress
$icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",
                    "link_before"=>$icone)); ?>


    <div class="footer__searchbar">
        <!-- Barre de recherche -->
        <?php get_search_form() ?>
    </div>

    <!-- Copyright -->
    <p class="footer__copyright">&copy;2022 Guillaume Vézina - Collège de Maisonneuve</p>
</footer>

<div class="boite__modale">
    <button class="boite__modale__fermeture">X</button>

    <p class="boite__modale__texte">
        Ceci est un premier test de boite modale
    </p>
</div>


<div class="boite__carrousel">
    <button class="boite__carrousel__fermeture">X</button>
    <section class="boite__carrousel__navigation"></section>
    <section class="boite__carrousel__img"></section>
</div>

<!-- Obtenir le pied de page de Wordpress -->
<?php wp_footer(); ?>
</body>

</html>