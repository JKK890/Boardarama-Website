var cImage = document.getElementById("carouselImage");
var cLabel = document.getElementById("carouselLabel");
var i = 0;
var imageNames = [
  { game: "catan", description: "Our newest board game, Catan!", alt: "Catan" },
  { game: "DnD", description: "A fantastical table top RPG, D&D!", alt: "D&D" },
  {
    game: "monopoly",
    description: "One of our most popular games, Monopoly!",
    alt: "Monopoly",
  },
  {
    game: "pkmn",
    description: "The original trading card game, Pokemon!",
    alt: "Pokemon",
  },
  { game: "Root", description: "Our staff pick, Root!", alt: "Root" },
  {
    game: "ttr",
    description: "A great family-friendly game, Ticket to ride!",
    alt: "Ticket-to-ride",
  },
];

function updateCarousel() {
  cImage.innerHTML = `<img class="carouselImage" src="images/products/${imageNames[i].game}.png" alt="${imageNames[i].alt}">`;
  cLabel.innerHTML = `<footer class="carouselLabel"><h5>${imageNames[i].description}</h5></footer>`;
  i++;
  if (i >= imageNames.length) {
    i = 0;
  }
}

updateCarousel();
setInterval(updateCarousel, 5000);
