(function()
{
    // Variable boite modale
    let boite__modale = document.querySelector(".boite__modale");
    let boite__modale__texte = document.querySelector(".boite__modale__texte");
    
    // Variable description du cours
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    let boite__modale__fermeture = document.querySelector('.boite__modale__fermeture');

    // Pour chaque bouton des descriptions de cours,
    for (const bout of cours__desc__ouvrir)
    {
        // Si l'on clique sur le bouton,
        bout.addEventListener('mousedown', function()
        {
            // S'il n'y a pas de classe,
            if (!boite__modale.classList.contains('ouvrir'))
            {
                // Ajouter la classe "ouvrir" à la boite modale
                boite__modale.classList.add('ouvrir');

                // Concaténer le texte de la boite modale au parent du parent de cet élément
                boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML
            }
            
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