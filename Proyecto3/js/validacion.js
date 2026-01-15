document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    if (!form) return;

    form.addEventListener("submit", function(event) {
        const nombre = form.nombre ? form.nombre.value.trim() : "ok";
        const email = form.email.value.trim();
        const edad = form.edad ? form.edad.value.trim() : "20"; 
        
        let errores = [];

        if (nombre !== "ok" && nombre.length < 3) {
            errores.push("El nombre debe tener al menos 3 caracteres.");
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errores.push("Error: correo inválido (Falta @ o formato incorrecto).");
        }

        // Validación Edad
        if (edad !== "ok" && (isNaN(edad) || edad < 1 || edad > 120)) {
            errores.push("La edad debe ser un número entre 1 y 120.");
        }

        if (errores.length > 0) {
            event.preventDefault();
            alert(errores.join("\n"));
        }
    });
});