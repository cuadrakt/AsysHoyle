<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Asistencias</title>
</head>
<body>
    <h1>Modulo de Registro de Asistencias</h1>
    <form>
        <label>Nombre del estudiante:</label>
        <input type="text" name="estudiante">
        <label>Fecha:</label>
        <input type="date" name="fecha">
        <label>Estado:</label>
        <select name="estado">
            <option>Presente</option>
            <option>Ausente</option>
            <option>Tardanza</option>
        </select>
        <button type="submit">Registrar asistencia</button>
    </form>
    <a href="index.php">Volver al inicio</a>
</body>
</html>
