<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      height: 100vh;
      background: linear-gradient(135deg, #F9F9E8, #EDEBD0);
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      background-color: #13281F;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      width: 400px;
      padding: 3rem;
      text-align: center;
      animation: fadeIn 0.6s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      color: #F0F0D8;
      text-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
      margin-bottom: 10px;
    }

    p {
      color: #bdbdbd;
      margin-bottom: 2rem;
    }

    .input-group {
      display: flex;
      align-items: center;
      background: #F8F8E8;
      border-radius: 12px;
      padding: 0.8rem 1rem;
      margin-bottom: 1rem;
    }

    .input-group i {
      color: #2ECC71;
      margin-right: 10px;
    }

    .input-group input {
      background: transparent;
      border: none;
      outline: none;
      flex: 1;
      font-size: 1rem;
      color: #333;
    }

    button {
      background-color: #2ECC71;
      color: white;
      border: none;
      border-radius: 12px;
      padding: 0.9rem 2rem;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      width: 100%;
    }

    button:hover {
      background-color: #27AE60;
      transform: scale(1.05);
    }

    a {
      color: #4CAF50;
      text-decoration: none;
      transition: color 0.3s ease;
      font-weight: 500;
    }

    a:hover {
      color: #81C784;
    }

    .links {
      margin-top: 1.5rem;
      font-size: 0.9rem;
      color: #ccc;
    }

    @media (max-width: 600px) {
      .container {
        width: 90%;
        padding: 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>BIENVENIDO</h1>
    <p>Inicia sesión aquí</p>

    <div class="input-group">
      <i class="fa fa-envelope"></i>
      <input type="email" placeholder="Email">
    </div>

    <div class="input-group">
      <i class="fa fa-lock"></i>
      <input type="password" placeholder="Contraseña">
    </div>

    <button>Iniciar Sesión</button>

    <div class="links">
      ¿No tienes una cuenta? <a href="#">Regístrate aquí</a><br>
      <i class="fa fa-eye"></i> <a href="registro.php">Ver Rides Disponibles</a>
    </div>
  </div>
</body>
</html>
