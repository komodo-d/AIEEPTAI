// ================== CARGA POST DOOM ==================

document.addEventListener('DOMContentLoaded', function () {
    actualizarReloj();
    setInterval(actualizarReloj, 1000);
});

// ================== RELOJ ==================

function actualizarReloj() {
    const dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                   'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    const ahora = new Date();

    const diaSemana = dias[ahora.getDay()];
    const dia = ahora.getDate().toString().padStart(2, '0');
    const mes = meses[ahora.getMonth()];
    const año = ahora.getFullYear();

    const horas = ahora.getHours().toString().padStart(2, '0');
    const minutos = ahora.getMinutes().toString().padStart(2, '0');
    const segundos = ahora.getSeconds().toString().padStart(2, '0');

    const formatoFechaHora = `${diaSemana} ${dia} de ${mes} ${año}, ${horas}:${minutos}:${segundos}`;
    document.getElementById('reloj').textContent = formatoFechaHora;
}

// Actualiza cada segundo
setInterval(actualizarReloj, 1000);
actualizarReloj(); // Ejecuta al cargar

//
const categoriaActual = "general";
const contenedor = document.getElementById("contenedor-general"); // <- ahora apunta al contenedor correcto


const noticiasFiltradas = noticias.filter(n => n.categoria === categoriaActual);

noticiasFiltradas.forEach(noticia => {
  const parser = new DOMParser();
  const doc = parser.parseFromString(noticia.contenido_completo, "text/html");

  // Tomar el primer <p> que no contenga <strong> como resumen
  const resumen = doc.querySelector("p:not(:has(strong))")?.textContent || "Resumen no disponible.";

  const card = document.createElement("div");
  card.classList.add("card");

  card.innerHTML = `
    <img src="${noticia.imagen}" class="news-img" alt="Imagen noticia ${noticia.id}">
    <div class="card-content">
        <a href="noticia1.html?id=${noticia.id}">
            <h3>${noticia.titulo}</h3>
        </a>
        <div class="categoria ${noticia.categoria}">${noticia.categoria.charAt(0).toUpperCase() + noticia.categoria.slice(1)}</div>
        <p>${resumen}</p>
    </div>
  `;

  contenedor.appendChild(card);
});


