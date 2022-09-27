function criarBolhas(){
    const section = document.querySelector('section');
    const criaElemento = document.createElement('span');

    var tamanho = Math.random() * 40;

    criaElemento.style.width = tamanho + 'px';
    criaElemento.style.height = tamanho + 'px';
    criaElemento.style.left = Math.random() * innerWidth + 'px';
    section.appendChild(criaElemento);

    setTimeout(()=> {
        criaElemento.remove();
    },400);
}

setInterval(criarBolhas, 70);