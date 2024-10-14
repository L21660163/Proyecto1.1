// Mostrar mensaje de aviso al cargar la página
window.onload = function() {
  alert("¿Eres aspirante nuevo y NO te has registrado? Proporciona el número de solicitud y el NIP que se te proporcionó para actualizar los datos de la solicitud. Si aún no te registras, el número de solicitud y NIP es 0 (cero). ES MUY IMPORTANTE QUE UTILICES MOZILLA FIREFOX.");
};

// Validar el formulario al hacer clic en "Iniciar sesión"
document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Evitar que el formulario se envíe automáticamente

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  // Validar si el número de solicitud y NIP son correctos (en este caso: "0" y "0")
  if (email === "0" && password === "0") {
    // Redirigir a la página de recomendaciones
    window.location.href = "recomendaciones.php";
  } else {
    alert("Número de solicitud o NIP incorrectos");
  }
});
