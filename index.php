<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre_alumno = "Álvaro Peinado de Arcos";
        $modulo = "Desarrollo Web en Entorno Servidor";
        $nota_media = 7.5;
        $es_matriculado = true;

        echo "<h1>$nombre_alumno</h1>";
        echo "<h2>$modulo</h2>";
        echo "<p>Mi nota media es: $nota_media</p>";

        if ($nota_media < 5){
            echo "<p>Nota Insuficiente</p>";
        } elseif ($nota_media >= 5 && $nota_media < 7){
            echo "<p>Nota Suficiente</p>";
        } elseif ($nota_media >= 7 && $nota_media < 9){
            echo "<p>Nota Bien</p>";
        } else {
            echo "<p>Nota Sobresaliente</p>";
        }

        if ($es_matriculado) {
            echo "<p>Estado: alumno matriculado</p>";
        } else {
            echo "<p>Estado: alumno no matriculado</p>";
        }

        echo "<table border='1'>";
        $i = 1;
        while ($i <= 5) {
            echo 
            "<tr>
                <td>Fila número:</td>
                <td>$i</td>
            </tr>";
            $i++;
        }
        echo "</table>";
    ?>
</body>
</html>
