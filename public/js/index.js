const estrela = document.querySelectorAll(".estrelas img");
const estrelaAval = document.querySelectorAll(".estrelas-minha-avaliacao img");
let avaliacao = -1; // Guarda a avaliação selecionada

estrela.forEach((element, index, estrelas) => {
    element.addEventListener('click', () => {
        avaliacao = index;
        estrelas.forEach((e, i) => {
            e.src = i <= index ? '../img/icones/Icon/estrela-roxa.png' : '../img/icones/Icon/Vector-1.png';
        });
    });

    element.addEventListener('mouseenter', () => {
        estrelas.forEach((e, i) => {
            e.src = i <= index ? '../img/icones/Icon/estrela-roxa.png' : '../img/icones/Icon/Vector-1.png';
        });
    });

    element.addEventListener('mouseleave', () => {
        estrelas.forEach((e, i) => {
            e.src = i <= avaliacao ? '../img/icones/Icon/estrela-roxa.png' : '../img/icones/Icon/Vector-1.png';
        });
    });
});




estrelaAval.forEach((element, index, Content) => {
    element.addEventListener('click', () => {
        avaliacao = index;
        Content.forEach((e, i) => {
            e.src = i <= index ? '../img/icones/Icon/estrela-roxa.png' : '../img/icones/Icon/Vector-1.png';
        });
    });

    element.addEventListener('mouseenter', () => {
        Content.forEach((e, i) => {
            e.src = i <= index ? '../img/icones/Icon/estrela-roxa.png' : '../img/icones/Icon/Vector-1.png';
        });
    });

    element.addEventListener('mouseleave', () => {
        Content.forEach((e, i) => {
            e.src = i <= avaliacao ? '../img/icones/Icon/estrela-roxa.png' : '../img/icones/Icon/Vector-1.png';
        });
    });
});


const modal = document.getElementById("btn-abrir")
const modalConteudo = document.querySelector('.container-modal')
const fechar = document.getElementById("fechar")
const container = document.querySelector('.container')
const containerAval = document.querySelector('.container-avaliacao')
const cabecalho = document.querySelector('header')
const body = document.querySelector('body')

modal.addEventListener('click', () => {
    modalConteudo.classList.toggle('abrir-modal')
    container.style.filter = "blur(5px)"
    containerAval.style.filter = "blur(5px)"
    cabecalho.style.filter = "blur(5px)"
    body.style.overflowY = "hidden"
    window.scrollTo({ top: 0, behavior: "smooth" })

})

fechar.addEventListener('click', () => {
    modalConteudo.classList.toggle('fechar-modal')
    if(modalConteudo.classList.contains('abrir-modal')){
        modalConteudo.classList.remove('abrir-modal')
        container.style.filter = "blur(0px)"
        containerAval.style.filter = "blur(0px)"
        cabecalho.style.filter = "blur(0px)"
        body.style.overflowY = "auto"
    }
})
