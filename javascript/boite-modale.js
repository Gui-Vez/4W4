(function()
{
    // Variable boite modale
    let boite__modale = document.querySelector(".boite__modale");
    
    // Variable description du cours
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');

    let boite__modale__fermeture = document.querySelector('.boite__modale__fermeture');


    // Pour chaque bouton des descriptions de cours,
    for (const bout of cours__desc__ouvrir)
    {
        // Si l'on clique sur le bouton,
        bout.addEventListener('mousedown', function()
        {
            // S'il n'y a pas de classe, ajouter la classe "ouvrir"
            if (!boite__modale.classList.contains('ouvrir'))
            boite__modale.classList.add('ouvrir');

            // Sinon, l'enlever
            else
            boite__modale.classList.remove('ouvrir');
        })
    }

    // Si l'on clique sur le bouton de fermeture de la boite modale,
    boite__modale__fermeture.addEventListener('mousedown', function()
    {
        // Enlever la classe "ouvrir"
        boite__modale.classList.remove('ouvrir');
    })
})()