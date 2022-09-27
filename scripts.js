function criarBolhas() {
  const section = document.querySelector("header");
  const criaElemento = document.createElement("span");

  var tamanho = Math.random() * 60;

  criaElemento.style.width = tamanho + "px";
  criaElemento.style.height = tamanho + "px";
  criaElemento.style.left = Math.random() * (innerWidth / 1.25) + "px";
  section.appendChild(criaElemento);

  setTimeout(() => {
    criaElemento.remove();
  }, 850);
}

setInterval(criarBolhas, 150);

const cards = document.querySelectorAll(".card");

cards.forEach((card) => {
  card.addEventListener("click", () => {
    let dataIndex = card.getAttribute("data-index");
    let conteudo = null;

    switch (dataIndex) {
      case 2:
        conteudo = document.getElementById(2);
        conteudo.style.display = "";
        break;

      case 3:
        conteudo = document.getElementById(3);
        conteudo.style.display = "";
        break;

      default:
        conteudo = document.getElementById(1);
        conteudo.style.display = "";
        break;
    }
  });
});
