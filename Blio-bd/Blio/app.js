document.addEventListener("DOMContentLoaded", function() {
    // Seu código aqui
    const mobilemenu  = document.querySelector(".mobilemenu");
    const nav = document.querySelector(".nav");

    if (mobilemenu && nav) {
        mobilemenu.addEventListener("click", () => {
            nav.classList.toggle("active");
        });
    } else {
        console.error("Elemento não encontrado no DOM.");
    }
});
