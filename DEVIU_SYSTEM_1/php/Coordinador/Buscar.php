<?php
include 'Inicio.php';

$ID_Estudiante = $_POST["ID_Estudiante"];

include 'Conexion.php';

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

// SI NO SE HA CONECTADO A LA BD
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BD :c";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD :c");
mysqli_set_charset($conexion, "utf8");

$consulta = "select * from Vista_estu where Documento = '$ID_Estudiante'";
$resultados = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_row($resultados)) {
    ?>
    <div class="container mx-auto max-w-lg bg-gray-100 rounded-lg shadow-lg p-6">
        <div class="text-center">
            <h2 class="text-3xl text-gray-800 mb-4">Datos del estudiante</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Nombre del Estudiante:</label>
                <p class="text-gray-800"><?php echo $fila[1]; ?></p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Número Documento:</label>
                <p class="text-gray-800"><?php echo $fila[0]; ?></p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Tipo Documento:</label>
                <p class="text-gray-800"><?php echo $fila[3]; ?></p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Género:</label>
                <p class="text-gray-800"><?php echo $fila[2]; ?></p>
            </div>
        </div>
        <div class="mt-6">
            <h2 class="text-center text-3xl text-gray-800 mb-4">Registro de asistencia</h2>
            <form action="Registra.php" method="post">
                <div class="mb-4">
                    <label for="codigoEstudiante" class="block text-gray-700 font-bold mb-2">Código del Estudiante</label>
                    <input type="text" class="form-input w-full border-gray-300 rounded-md" id="codigoEstudiante" placeholder="Ingrese el código del estudiante" name="ID_Estu">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Estado de asistencia:</label>
                    <div>
                        <input type="radio" name="Registro" value="Falla" id="">Falla<br>
                        <input type="radio" name="Registro" value="Asiste" id="">Asiste<br>
                        <input type="radio" name="Registro" value="Retardo" id="">Retardo<br>
                        <input type="radio" name="Registro" value="Evasion" id="">Evasión<br>
                        <input type="radio" name="Registro" value="Justificada" id="">Falla Justificada<br>
                    </div>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Registrar asistencia</button>
            </form>
        </div>
    </div>
<?php
}
?>
