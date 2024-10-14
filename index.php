<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Autentificación para acceso al sistema</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Autentificación para acceso al sistema</h2>
      <p class="text-center">Exclusivo para alumnos con año de ingreso superior al 2018</p>
      <form id="loginForm">
        <div class="input-group">
          <label for="email">No. Solicitud</label>
          <div class="input-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <input type="text" id="email" placeholder="Ingresa tu No. de Solicitud" required>
          </div>
        </div>
        <div class="input-group">
          <label for="password">NIP</label>
          <div class="input-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            <input type="password" id="password" placeholder="Ingresa tu NIP" required>
          </div>
        </div>
        <button type="submit">Iniciar sesión</button>
      </form>
    </div>
  </div>

  <script src="script/main.js"></script>
</body>
</html>
