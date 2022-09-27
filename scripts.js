function criarBolhas(){
    const section = document.querySelector('header');
    const criaElemento = document.createElement('span');

    var tamanho = Math.random() * 60;

    criaElemento.style.width = tamanho + 'px';
    criaElemento.style.height = tamanho + 'px';
    criaElemento.style.left = Math.random() * (innerWidth/1.25) + 'px';
    section.appendChild(criaElemento);

    setTimeout(()=> {
        criaElemento.remove();
    },850);
}

setInterval(criarBolhas, 150);