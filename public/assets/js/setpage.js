const form = document.getElementById("ricerca");

form.addEventListener("submit", function(event) {
  event.preventDefault();

  const query = form.searchInput.value.toLowerCase();
  const cards = document.querySelectorAll("#containerset .card");

  cards.forEach(card => {
    const title = card.querySelector("h3").textContent.toLowerCase();

    if (title.includes(query)) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
});
