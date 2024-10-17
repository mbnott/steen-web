// Liste de jeux d'exemple
const games = [
    {
        title: "MarioPatern",
        description: "Jeu de plateforme inspiré de Mario, créé pour le fun.",
        releaseDate: "12 mars 2023"
    },
    {
        title: "OsuMonsu",
        description: "Un pointer-click rapide et dynamique.",
        releaseDate: "5 septembre 2021"
    },
    {
        title: "League of Noob",
        description: "Un MOBA collaboratif inspiré de League of Legends.",
        releaseDate: "15 août 2022"
    },
    {
        title: "AddKeyBing",
        description: "Un outil pour ajouter des raccourcis clavier comme des macros.",
        releaseDate: "1 janvier 2024"
    },
    {
        title: "Letal Composte",
        description: "Un jeu d'énigmes avec des mécaniques uniques.",
        releaseDate: "30 octobre 2020"
    }
];

// Fonction pour afficher les jeux
function displayGames(filteredGames) {
    const gamesList = document.getElementById('games-list');
    gamesList.innerHTML = ''; // Vider la liste des jeux avant de les ajouter à nouveau

    filteredGames.forEach(game => {
        const gameCard = `
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Projet 2">
                    <div class="card-body">
                        <h5 class="card-title">${game.title}</h5>
                        <p class="card-text">${game.description}</p>
                    </div>
                    <div class="card-footer">
                        <small class="date-release">Date de sortie : ${game.releaseDate}</small>
                    </div>
                </div>
            </div>
        `;
        gamesList.innerHTML += gameCard;
    });
}

// Fonction pour filtrer les jeux en fonction de la recherche
function filterGames() {
    const searchInput = document.getElementById('search').value.toLowerCase();
    const filteredGames = games.filter(game => 
        game.title.toLowerCase().includes(searchInput) || 
        game.description.toLowerCase().includes(searchInput)
    );
    displayGames(filteredGames);
}

// Événement de recherche
document.getElementById('search').addEventListener('input', filterGames);

// Afficher les jeux au chargement de la page
window.onload = () => {
    displayGames(games);
};
