const filmes = document.querySelectorAll('.filme');
filmes.forEach((filme) => {
    filme.addEventListener('click', () => {
        const id = filme.getAttribute('data-id');
        window.location.href = `detalhes-filme?id=${id}`;
    });
})