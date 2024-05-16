// Définir les valeurs des filtres
const meta_key = "temperature_max";
const meta_value = 35;

// Construire l'URL de la requête avec les filtres
const url = `https://4w4gabrielle//wp-json/wp/v2/posts?filter[meta_key]=${meta_key}&filter[meta_value]=${meta_value}`;

// Utiliser Fetch pour envoyer la requête GET
fetch(url)
  .then((response) => {
    // Vérifier si la réponse est OK (statut 200)
    if (!response.ok) {
      throw new Error("Erreur lors de la récupération des données");
    }
    // Convertir la réponse en JSON
    return response.json();
  })
  .then((data) => {
    // Parcourir les articles et extraire le champ personnalisé "ville"
    data.forEach((post) => {
      // Vérifier si le champ personnalisé "ville" existe
      if (post.meta && post.meta.ville) {
        // Afficher la valeur du champ personnalisé "ville"
        console.log("Ville :", post.meta.ville);
      } else {
        console.log(
          "Champ personnalisé \"ville\" non trouvé pour l'article avec l'ID :",
          post.id
        );
      }
    });
  })
  .catch((error) => {
    console.error("Erreur :", error);
  });
