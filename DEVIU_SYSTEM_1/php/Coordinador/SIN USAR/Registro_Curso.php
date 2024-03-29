<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- METADATOS -->
        <meta charset="UTF-8">
        <meta name="author" content="Deviu System">
        <meta name="descripcion" content="Aplicativo web Valiny">
        <meta name="keywords" content="HTML, CSS, JavaScript, React">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- TITULO -->
        <title>Aplicativo web | Valiny</title>
    
        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="../../images/codigo-qr.png">
    
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
        <!-- CSS -->
        <link rel="stylesheet" href="../../css/style.css">
    </head>
<body>
<!-- NAVEGACION MODIFICADA -->
<nav class="navbar navbar-expand-md bg-body py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#"><span>REPORTES POR CURSOS</span></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Inicio.php"><i class="bi bi-house-door"></i> Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-file-earmark-bar-graph"></i> Reportes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Asistencia_Escolar.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia</a></li>
                        <li><a class="dropdown-item" href="Optimizacion_Asistencia.php"><i class="bi bi-gear"></i> Optimización de Asistencia</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-file-earmark-bar-graph"></i> Reportes de Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Registro_Curso.php"><i class="bi bi-file-earmark-text"></i> Registro de Asistencia</a></li>
                        
                    </ul>
                </li>
            </ul>
            <a class="nav-link btn btn-primary ms-md-2" href="Ingreso.php" role="button"><i class="bi bi-door-open"></i> Salir</a>
        </div>
    </div>
</nav>

    <!-- TÍTULO DE LA PÁGINA -->
    <div class="container mt-4">
        <h3 class="text-center">Registro de Cursos</h3>
    </div>

    <!-- CONTENIDO DEL REGISTRO DE CURSOS -->
    <div class="container mt-4">
        <!-- Aquí puedes agregar los elementos que necesitas para el registro de cursos. Por ejemplo, tablas, formularios, gráficas, etc. -->

        <!-- Ejemplo de una tabla para listar los cursos -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Código del Curso</th>
                    <th scope="col">Nombre del Curso</th>
                    <th scope="col">Profesor</th>
                    <th scope="col">Horario</th>
                    <!-- Puedes agregar más columnas según tus necesidades -->
                </tr>
            </thead>
            <tbody>
                <!-- llenar la tabla con los datos de los cursos -->
                <tr>
                    <td>101</td>
                    <td>Matemáticas Avanzadas</td>
                    <td>Profesor Smith</td>
                    <td>Lunes y Miércoles 10:00 AM - 12:00 PM</td>
                </tr>
                <tr>
                    <td>101</td>
                    <td>Matemáticas Avanzadas</td>
                    <td>Profesor Smith</td>
                    <td>Lunes y Miércoles 10:00 AM - 12:00 PM</td>
                </tr>
                <tr>
                    <td>101</td>
                    <td>Matemáticas Avanzadas</td>
                    <td>Profesor Smith</td>
                    <td>Lunes y Miércoles 10:00 AM - 12:00 PM</td>
                </tr>
                <!-- Puedes agregar más filas para más cursos -->
            </tbody>
        </table>

    <!-- CONTENIDO DE "Optimización de Asistencia" -->
    <div class="container mt-4">
        <h3 class="text-center">Optimización de Asistencia</h3>

        <!-- Observaciones -->
    <div class="mt-4">
        <h4>Observaciones</h4>
        <ul>
            <!-- Lista de observaciones relacionadas con la asistencia -->
            <li>Observación 1: Descripción de la observación.</li>
            <li>Observación 2: Descripción de la observación.</li>
            <li>Observación 3: Descripción de la observación.</li>
            <!-- lista dinámicamente con base de datos -->
        </ul>
    </div>

    <!-- Botones de Acción -->
    <div class="mt-4">
        <center><button type="button" class="btn btn-primary">Exportar Informe</button></center>
    </div>
</div>
        <!-- agregar más elementos , como gráficas, botones de acción, etc. -->
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>