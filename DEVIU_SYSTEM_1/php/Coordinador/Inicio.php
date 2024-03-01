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
    
    <!-- CSS PERSONALIZADO -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-to-r from-purple-500 to-blue-500 flex justify-center items-center h-screen">

    <!-- CONTENIDO PRINCIPAL -->
    <div class="p-1 rounded-lg shadow-lg bg-white w-full sm:w-96">

        <!-- NAVEGACION MODIFICADA -->
        <nav class="navbar navbar-expand-md bg-body py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#"><span>INICIO</span></a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-2">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <i class="bi bi-file-earmark-bar-graph"></i> Reportes
                            </a>
                            <ul class="dropdown-menu">
                                <!--<li><a class="dropdown-item" href="Asistencia_Escolar.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia</a></li>-->
                                <li><a class="dropdown-item" href="Optimizacion_Asistencia.php"><i class="bi bi-gear"></i> Optimización de Asistencia</a></li>
                            </ul>
                        </li>
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <i class="bi bi-file-earmark-bar-graph"></i> Reportes de Cursos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Registro_Curso.php"><i class="bi bi-file-earmark-text"></i> Registro de Asistencia</a></li>
                            </ul>
                        </li>-->
                    </ul>
                    <a class="nav-link btn btn-primary ms-md-2" href="Ingreso.php" role="button"><i class="bi bi-door-open"></i> Salir</a>
                </div>
            </div>
        </nav>

        <!-- CONTENIDO -->
    <div class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8">
        <div class="container grid grid-cols-2 gap-0">
            <!-- Columna 1 -->
            <div class="col-span-1 bg-white rounded-lg overflow-hidden shadow-md flex items-center">
                <!-- Foto -->
                <div class="h-20 w-20 rounded-full overflow-hidden">
                    <img class="w-20 h-20 object-cover" src="../../images/yo.jpg" alt="Foto de usuario">
                </div>
            </div>
            <!-- Columna 2 -->
            <div class="col-span-1 bg-white rounded-lg overflow-hidden shadow-md">
                <!-- Fila 1 -->
                <div class="py-1 px-2">
                    <h4 class="text-lg font-semibold">Cristian Lombana</h4>
                </div>
                <!-- Fila 2 -->
                <div class="bg-gray-200 py-2 px-2">
                    <h4 class="text-lg font-semibold text-gray-600">Orientador</h4>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <h3 class="text-center">Lectura Código QR</h3>
            <div class="mt-2 bg-gray-200">
                <h4 class="text-center text-black">Entrada Comedor Escolar</h4>
            </div>
                <!-- FORMULARIO DE ESTUDIANTE -->
                <div class="container mt-4">
                    <form action="Buscar.php" method="post">
                        <div class="mb-3">
                            <label for="codigoEstudiante" class="form-label">Código del Estudiante</label>
                            <input type="text" class="form-control" id="codigoEstudiante" placeholder="Ingrese el código del estudiante" name="ID_Estudiante">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-blue-500 text-white px-6 py-1 rounded-md hover:bg-blue-600">Finalizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>