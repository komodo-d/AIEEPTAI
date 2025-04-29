// noticias.js (para la página principal)
const noticiasBase = [
    {
        id: 1,
        titulo: "Experta lo demuestra con 'The Office': el truco para pasar tus fotos al estilo Studio Ghibli",
        resumen: "En los últimos días, cientos o miles de fotos al más puro Studio Ghibli han inundado las redes sociales...",
        imagen: "img/portada_noticia/general1.png",
        categoria: "general",
    },
    {
        id: 2,
        titulo: "Qué significa que a mi árbol de jade se le caigan las hojas",
        resumen: "La crassula ovata, más conocida como el árbol de jade, es una planta suculenta originaria de Mozambique...",
        imagen: "img/portada_noticia/general2.jpg",
        categoria: "general",
        contenido_completo: "<p>Contenido completo de la noticia 2.</p>"
    },
    {
        id: 3,
        titulo: "¿Guerra de precios?: Así funciona Petroprix, bencinera que llegará a Chile",
        resumen: "Petroprix, una bencinera española “low cost”, se instalará en Chile con al menos 50 estaciones de servicio...",
        imagen: "img/portada_noticia/general3.jpg",
        categoria: "general",
        contenido_completo: "<p>Contenido completo de la noticia 3.</p>"
    }
    // Otras noticias...
];

// Función para agrupar noticias por categoría
function agruparNoticiasPorCategoria() {
    const categorias = {};

    noticias.forEach(noticia => {
        if (!categorias[noticia.categoria]) {
            categorias[noticia.categoria] = [];
        }
        categorias[noticia.categoria].push(noticia);
    });

    return categorias;
}

// Función para mostrar las noticias agrupadas por categoría
function mostrarNoticias() {
    const contenedorCategorias = document.getElementById('contenedor-categorias');
    if (!contenedorCategorias) {
        console.error('Contenedor no encontrado');
        return;
    }

    // Agrupamos las noticias por categoría
    const noticiasPorCategoria = agruparNoticiasPorCategoria();

    Object.keys(noticiasPorCategoria).forEach(categoria => {
        const categoriaDiv = document.createElement('section');
        categoriaDiv.classList.add('categoria');
        
        const cantidadNoticias = noticiasPorCategoria[categoria].length;
        const categoriaTitulo = document.createElement('h2');
        categoriaTitulo.innerHTML = `
        <a href="categoria.html?categoria=${categoria}">
            ${categoria.charAt(0).toUpperCase() + categoria.slice(1)} (${cantidadNoticias})
        </a>`;

        categoriaDiv.appendChild(categoriaTitulo);

        const cardContainer = document.createElement('div');
        cardContainer.classList.add('card-container');
        
        noticiasPorCategoria[categoria].forEach(noticia => {
            const card = document.createElement('div');
            card.classList.add('card');
            
            card.innerHTML = `
                <img src="${noticia.imagen}" class="news-img" alt="Imagen noticia ${noticia.id}">
                <div class="card-content">
                    <a href="noticia.html?id=${noticia.id}">
                        <h3>${noticia.titulo}</h3>
                    </a>
                    <div class="categoria ${categoria}">${categoria.charAt(0).toUpperCase() + categoria.slice(1)}</div>
                    <p>${noticia.resumen}</p>
                </div>
            `;
            
            cardContainer.appendChild(card);
        });

        categoriaDiv.appendChild(cardContainer);
        contenedorCategorias.appendChild(categoriaDiv);
    });
}

// Ejecutar la función cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', mostrarNoticias);
const noticiasExtra = JSON.parse(localStorage.getItem("noticiasExtra")) || [];
const noticias = [...noticiasBase, ...noticiasExtra];


document.addEventListener("DOMContentLoaded", () => {
    const contenedor = document.getElementById("noticia");
    if (!contenedor) return;

    const params = new URLSearchParams(window.location.search);
    const id = parseInt(params.get("id"));

    const todas = [...noticiasBase, ...(JSON.parse(localStorage.getItem("noticiasExtra")) || [])];
    const noticia = todas.find(n => n.id === id);

    if (!noticia) {
        contenedor.innerHTML = "<p>Noticia no encontrada 😢</p>";
        return;
    }

    contenedor.innerHTML = `
        <section class="articulos">
            <h2>${noticia.titulo}</h2>
            <img src="${noticia.imagen}" alt="${noticia.titulo}" style="max-width: 100%; border-radius: 8px; margin-bottom: 20px;">
            <div class="categoria ${noticia.categoria}">${noticia.categoria}</div>
            <p>${noticia.resumen}</p>
            ${noticia.contenido_completo}
        </section>
    `;
});
