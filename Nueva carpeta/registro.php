<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #F9F9E8, #EDEBD0);
      font-family: 'Poppins', sans-serif;
    }

    .card {
      background-color: #13281F;
      color: #F0F0D8;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
      padding: 2.5rem;
    }

    .form-control, .form-select {
      background-color: #F8F8E8;
      border: none;
      border-radius: 12px;
      padding: 0.8rem 1rem;
    }

    .form-control:focus {
      box-shadow: 0 0 10px rgba(46, 204, 113, 0.4);
      border-color: #2ECC71;
    }

    .btn-success {
      background-color: #2ECC71;
      border: none;
      border-radius: 12px;
      padding: 0.8rem 1rem;
      font-weight: 600;
      width: 100%;
      transition: transform 0.2s;
    }

    .btn-success:hover {
      background-color: #27AE60;
      transform: scale(1.05);
    }

    .nav-tabs .nav-link.active {
      background-color: #2ECC71;
      color: white;
      border: none;
      border-radius: 10px;
    }

    .nav-tabs .nav-link {
      color: #F0F0D8;
      border: none;
    }

    .nav-tabs {
      border-bottom: 1px solid #3c4b42;
      justify-content: center;
      margin-bottom: 2rem;
    }

    a {
      color: #4CAF50;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    a:hover {
      color: #81C784;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card col-lg-6 col-md-8 col-sm-10">
      <h2 class="text-center mb-3 fw-bold">Registro de Usuarios</h2>
      <p class="text-center mb-4">Crea una nueva cuenta aquí</p>

      <!-- Pestañas -->
      <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="chofer-tab" data-bs-toggle="tab" data-bs-target="#chofer" type="button" role="tab">Chofer</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pasajero-tab" data-bs-toggle="tab" data-bs-target="#pasajero" type="button" role="tab">Pasajero</button>
        </li>
      </ul>

      <!-- Contenido de pestañas -->
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="chofer" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Tu nombre">
              </div>
              <div class="col-md-6">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" placeholder="Tu apellido">
              </div>
              <div class="col-md-6">
                <label class="form-label">Cédula</label>
                <input type="text" class="form-control" placeholder="Tu cédula">
              </div>
              <div class="col-md-6">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" placeholder="ejemplo@email.com">
              </div>
              <div class="col-md-6">
                <label class="form-label">Teléfono</label>
                <input type="tel" class="form-control" placeholder="+506 8888 8888">
              </div>
              <div class="col-12">
                <label class="form-label">Fotografía</label>
                <input type="file" class="form-control" accept="image/*">
              </div>
              <div class="col-md-6">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" placeholder="********">
              </div>
              <div class="col-md-6">
                <label class="form-label">Confirmar Contraseña</label>
                <input type="password" class="form-control" placeholder="********">
              </div>
              <div class="col-12">
                <button class="btn btn-success">Registrarse como chofer</button>
              </div>
            </div>
          </form>
        </div>

        <div class="tab-pane fade" id="pasajero" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Tu nombre">
              </div>
              <div class="col-md-6">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" placeholder="Tu apellido">
              </div>
              <div class="col-md-6">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" placeholder="ejemplo@email.com">
              </div>
              <div class="col-md-6">
                <label class="form-label">Teléfono</label>
                <input type="tel" class="form-control" placeholder="+506 8888 8888">
              </div>
              <div class="col-12">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" placeholder="********">
              </div>
              <div class="col-12">
                <button class="btn btn-success">Registrarse como pasajero</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="text-center mt-4">
        ¿Ya tienes una cuenta? <a href="#">Inicia sesión</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
