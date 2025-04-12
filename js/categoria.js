document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const categoriaActual = params.get('categoria');
  
    const contenedor = document.getElementById('categoria-noticias');
  
    if (!categoriaActual) {
      contenedor.innerHTML = '<p>No se especificó una categoría.</p>';
      return;
    }
  
    const noticiasFiltradas = noticias.filter(noticia => noticia.categoria === categoriaActual);
  
    if (noticiasFiltradas.length === 0) {
      contenedor.innerHTML = `<p>No hay noticias para la categoría "${categoriaActual}".</p>`;
      return;
    }
  
    const titulo = document.createElement('h2');
    titulo.textContent = `${categoriaActual.charAt(0).toUpperCase() + categoriaActual.slice(1)} (${noticiasFiltradas.length})`;
    contenedor.appendChild(titulo);
  
    const cardContainer = document.createElement('div');
    cardContainer.classList.add('card-container');
  
    noticiasFiltradas.forEach(noticia => {
      const card = document.createElement('div');
      card.classList.add('card');
  
      card.innerHTML = `
        <img src="${noticia.imagen}" class="news-img" alt="Imagen noticia ${noticia.id}">
        <div class="card-content">
          <a href="noticia.html?id=${noticia.id}">
            <h3>${noticia.titulo}</h3>
          </a>
          <div class="categoria ${noticia.categoria}">${noticia.categoria.charAt(0).toUpperCase() + noticia.categoria.slice(1)}</div>
          <p>${noticia.resumen}</p>
        </div>
      `;
      cardContainer.appendChild(card);
    });
  
    contenedor.appendChild(cardContainer);
  });
  