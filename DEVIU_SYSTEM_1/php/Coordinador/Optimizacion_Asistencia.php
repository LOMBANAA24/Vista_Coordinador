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
                <a class="navbar-brand d-flex align-items-center" href="#"><span>REPORTES</span></a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-2">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                        <li class="nav-item">
                    <a class="nav-link" href="Inicio.php"><i class="bi bi-house-door"></i> Inicio</a>
                </li>
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
    <!-- TITULO DEL ADMINISTRADOR -->
    <div class="container mt-4">
        <h1 class="text-center text-2xl font-bold">Registro de Asistencia</h1>
        <div class="mt-4">
            <h2 class="text-lg font-semibold">Búsqueda de registros</h2>
            <form action="contador.php" method="post" class="mt-2 space-y-2">
                <div>
                    <input type="radio" name="Contar" value="Falla" id="Falla" class="mr-2">
                    <label for="Falla" class="text-gray-800">Falla</label>
                </div>
                <div>
                    <input type="radio" name="Contar" value="Asiste" id="Asiste" class="mr-2">
                    <label for="Asiste" class="text-gray-800">Asiste</label>
                </div>
                <div>
                    <input type="radio" name="Contar" value="Retardo" id="Retardo" class="mr-2">
                    <label for="Retardo" class="text-gray-800">Retardo</label>
                </div>
                <div>
                    <input type="radio" name="Contar" value="Evasion" id="Evasion" class="mr-2">
                    <label for="Evasion" class="text-gray-800">Evasión</label>
                </div>
                <div>
                    <input type="radio" name="Contar" value="Justificada" id="Justificada" class="mr-2">
                    <label for="Justificada" class="text-gray-800">Falla Justificada</label>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar asistencia</button>
            </form>
        </div>
    </div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>