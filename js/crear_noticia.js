document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formulario-noticia");

    formulario.addEventListener("submit", function (e) {
        e.preventDefault();

        const nuevaNoticia = {
            id: Date.now(), // ID único
            titulo: document.getElementById("titulo").value.trim(),
            categoria: document.getElementById("categoria").value,
            resumen: document.getElementById("resumen").value.trim(),
            contenido_completo: document.getElementById("contenido").value.trim(),
            imagen: document.getElementById("imagen").value.trim() || "img/portada_noticia/default.jpg"
        };

        if (!nuevaNoticia.titulo || !nuevaNoticia.categoria || !nuevaNoticia.resumen || !nuevaNoticia.contenido_completo) {
            alert("Por favor, completa todos los campos.");
            return;
        }

        // Obtener las noticias guardadas o iniciar un array vacío
        const noticiasGuardadas = JSON.parse(localStorage.getItem("noticiasExtra")) || [];

        // Agregar la nueva
        noticiasGuardadas.push(nuevaNoticia);

        // Guardar de nuevo
        localStorage.setItem("noticiasExtra", JSON.stringify(noticiasGuardadas));

        alert("Noticia guardada correctamente ✅");
        formulario.reset();
        window.location.href = "index.html"; // Redirige al home
    });
});
