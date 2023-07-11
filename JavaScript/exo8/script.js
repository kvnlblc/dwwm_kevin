// Tableau d'objets associant les classes de chaque région à une couleur
const colors = [
  { class: 'region-01', color: 'teal' },
  { class: 'region-02', color: 'cyan' },
  { class: 'region-03', color: 'purple' },
  { class: 'region-04', color: 'lime' },
  { class: 'region-06', color: 'pink' },
  { class: 'region-11', color: 'indigo' },
  { class: 'region-24', color: 'darkorange' },
  { class: 'region-27', color: 'gold' },
  { class: 'region-28', color: 'crimson' },
  { class: 'region-32', color: 'darkgreen' },
  { class: 'region-44', color: 'orchid' },
  { class: 'region-52', color: 'royalblue' },
  { class: 'region-53', color: 'limegreen' },
  { class: 'region-75', color: 'peru' },
  { class: 'region-76', color: 'mediumslateblue' },
  { class: 'region-84', color: 'coral' },
  { class: 'region-93', color: 'darkred' },
  { class: 'region-94', color: 'mediumorchid' }
];


// Parcourir chaque région et ajouter un gestionnaire d'événements pour le survol
colors.forEach(item => {
  const regions = document.querySelectorAll('.' + item.class);

  regions.forEach(region => {
    region.addEventListener('mouseover', () => {
      region.style.fill = item.color;
    });

    region.addEventListener('mouseout', () => {
      region.style.fill = '';
    });
  });
});

// Sélectionner l'élément conteneur où les informations seront affichées
const infoContainer = document.getElementById('info-container');

// Sélectionner tous les éléments <g> avec la classe "region"
const regions = document.querySelectorAll('g.region');

// Parcourir tous les éléments <g> des régions
regions.forEach(region => {
  // Récupérer les informations de la région à partir des attributs "data-*"
  const regionNom = region.getAttribute('data-nom');
  const regionCodeINSEE = region.getAttribute('data-code_insee');
  const regionNumeroDepartement = region.getAttribute('data-numerodepartement');
  const regionPopulation = region.getAttribute('data-population');
  const regionSuperficie = region.getAttribute('data-superficie');
  const regionLongitude = region.getAttribute('data-longitude');
  const regionLatitude = region.getAttribute('data-latitude');

  // Créer un élément <h2> pour afficher les informations de la région
  const regionHeading = document.createElement('p');
  regionHeading.textContent = `Région : ${regionNom} (${regionCodeINSEE})`;

  // Créer un élément <p> pour afficher les informations supplémentaires de la région
  const regionInfoParagraph = document.createElement('p');
  regionInfoParagraph.innerHTML = `Population : ${regionPopulation}<br>
    Superficie : ${regionSuperficie}<br>
    Longitude : ${regionLongitude}<br>
    Latitude : ${regionLatitude}<br>`;

  // Ajouter un gestionnaire d'événements au clic sur la région
region.addEventListener('click', () => {
    // Effacer le contenu précédent de l'élément conteneur
    infoContainer.innerHTML = '';

    // Ajouter le titre de la région à l'élément conteneur
    infoContainer.appendChild(regionHeading);

    // Ajouter les informations de la région à l'élément conteneur
    infoContainer.appendChild(regionInfoParagraph);

    // Sélectionner tous les éléments <path> avec la classe "departement" et appartenant à la région
    const departements = region.querySelectorAll('path.departement');

    // Parcourir tous les éléments <path> des départements de la région
    departements.forEach(departement => {
      // Récupérer le nom et le code INSEE du département à partir des attributs "data-nom" et "data-numerodepartement"
      const departementNom = departement.getAttribute('data-nom');
      const departementCodeINSEE = departement.getAttribute('data-numerodepartement');

      // Créer un élément <p> pour afficher le nom et le code INSEE du département
      const departementParagraph = document.createElement('p');
      departementParagraph.textContent = `Département : ${departementNom} (${departementCodeINSEE})`;

      // Ajouter le paragraphe du département à l'élément conteneur
      infoContainer.appendChild(departementParagraph);
    });
  });
});
