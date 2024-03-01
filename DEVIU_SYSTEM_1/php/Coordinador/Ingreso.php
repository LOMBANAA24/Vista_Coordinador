<!DOCTYPE html>
<html lang="es">

<head>
    <!-- METADATOS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITULO -->
    <title>Formulario de Ingreso - Deviu System</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="codigo-qr.png">

    <!-- Agregar Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-purple-500 to-blue-500 flex justify-center items-center h-screen">
    <!-- Div principal -->
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <!-- Fondo inclinado -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <!-- Contenedor para el formulario -->
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <!-- Contenido -->
            <div class="max-w-md mx-auto">
                <!-- Título y subtítulo -->
                <div>
                    <h1 class="text-2xl md:text-3xl font-semibold text-gray-800">DEVIU SYSTEM</h1>
                    <p class="text-sm md:text-base text-gray-600">¡Bienvenido! Es un gusto tenerte de vuelta.</p>
                </div>
                <!-- Formulario -->
                <form action="sesion.php" method="POST" class="mt-8 space-y-4">
                    <!-- Campo de usuario -->
                    <div class="relative">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600" id="usuario" placeholder=" " name="ID_Admin" required>
                        <label for="usuario" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Usuario</label>
                    </div>
                    <!-- Campo de contraseña -->
                    <div class="relative">
                        <input type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600" id="contrasena" placeholder=" " name="Contrasenia" required>
                        <label for="contrasena" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Contraseña</label>
                    </div>
                    <!-- Botón de ingresar -->
                    <div class="relative">
                        <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>