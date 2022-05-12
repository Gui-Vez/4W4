(function()
{
    // Variable boite carrousel
    let boite__carrousel = document.querySelector(".boite__carrousel");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");
    
    // Variable description du cours
    let boite__carrousel__fermeture = document.querySelector('.boite__carrousel__fermeture');

    // Variable de la galerie d'images
    let galerie__img = document.querySelectorAll('.galerie img');
    let elmImg = document.createElement('img');

    // Variable de l'index du bouton
    let index = 0;

    // Attacher l'élément image à la boîte carrousel
    boite__carrousel.append(elmImg);

    for (const img of galerie__img)
    {
        // Créer un bouton au carrousel
        let bouton = document.createElement('button');

        // Attacher le bouton à la boite carrousel
        boite__carrousel__navigation.append(bouton);

        // Incrémenter l'index dataset du bouton
        bouton.dataset.index = index++;

        // Attacher ce bouton au carrousel
        boite__carrousel__navigation.append(bouton)

        // Lorsque l'on clique sur un bouton,
        bouton.addEventListener('mousedown', function()
        {
            // Attribuer l'image cliquée à son élément choisi
            elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'));
        });


        // Lorsque l'on clique sur l'image,
        img.addEventListener('mousedown', function()
        {
            // Donner la classe "ouvrir" à la boite servant de carrousel
            boite__carrousel.classList.add('ouvrir');

            // Saisir et inscrire la source de l'image
            elmImg.setAttribute('src', this.getAttribute('src'));
        })
    }

    // Si l'on clique sur le bouton de fermeture de la boite modale,
    boite__carrousel__fermeture.addEventListener('mousedown', function()
    {
        // Enlever la classe "ouvrir"
        boite__carrousel.classList.remove('ouvrir');
    })
})()