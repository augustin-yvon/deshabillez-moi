const categorieTypeSelect = document.getElementById('categorie_type');
const sousCategorieSelect = document.getElementById('categorie_id');

// Tableau associatif pour stocker les valeurs des sous-catégories
const sousCategoriesValues = {
    h: { Vetements: 1, Chaussures: 2, Accessoires: 3, Soins: 4 },
    f: { Vetements: 1, Chaussures: 2, Sacs: 3, Accessoires: 4, Beauté: 5 },
    e: { Filles: 1, Garcon: 2, Jouet: 3, Poussettes: 4, 'Chaises hautes et siège auto': 5 }
};

// Fonction pour mettre à jour les sous-catégories en fonction du type de catégorie sélectionné
function updateSousCategories() {
    // Remplacez ces données par les valeurs réelles de votre application
    const selectedType = categorieTypeSelect.value;

    // Efface les anciennes options
    sousCategorieSelect.innerHTML = '';

    // Ajoute les nouvelles options en fonction du type de catégorie sélectionné
    Object.entries(sousCategoriesValues[selectedType]).forEach(([sousCategorieText, sousCategorieValue]) => {
        const option = document.createElement('option');
        option.value = sousCategorieValue;
        option.textContent = sousCategorieText;
        sousCategorieSelect.appendChild(option);
    });
}

// Écoutez les changements dans le type de catégorie
categorieTypeSelect.addEventListener('change', updateSousCategories);

// Appelez la fonction une fois au chargement de la page pour afficher les options initiales
updateSousCategories();