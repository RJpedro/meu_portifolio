function criarBolhas() {
  const section = document.querySelector("#bolhas");
  const criaElemento = document.createElement("span");

  var tamanho = Math.random() * 55;

  criaElemento.style.width = tamanho + "px";
  criaElemento.style.height = tamanho + "px";
  criaElemento.style.opacity = "50%";
  criaElemento.style.left = Math.random() * 1250 + "px";
  section.appendChild(criaElemento);

  setTimeout(() => {
    criaElemento.remove();
  }, 3000);
}

setInterval(criarBolhas, 150);

var space = document.getElementById("space");

function decrementSpace() { 
  space.style = "height: 200px;";
}

function incrementSpace() {
  space.style = "height: 230px;";
}
