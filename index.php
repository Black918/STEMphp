<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Panel Fotovoltaico</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<section class="wrapper">
    <header>
        <h1 class="logo">Cálculo de Energía</h1>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Calcular la energía generada</h2>
            <p>Un panel fotovoltaico tiene una superficie de 6x3 m, un rendimiento del 20% y está expuesto a un promedio de 5 horas de radiación solar directa con un coeficiente de radiación de 0.9 kCal/m². Se necesita determinar:</p>
            <ul>
                <li>La energía generada por el panel en kCal.</li>
                <li>La energía generada en kWh.</li>
                <li>El equivalente en carga de batería.</li>
            </ul>
        </section>
        <section class="formulas">
            <h2>Fórmulas:</h2>
            <ul>
                <li>Energía generada (\(Q\)): \(Q = k \cdot s \cdot t\) en kCal</li>
                <li>Conversión a kWh: \(1\ kWh = 860\ kCal\)</li>
            </ul>
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            <ul>
                <li>Coeficiente de radiación (\(k\)): 0.9 kCal/m²</li>
                <li>Superficie del panel (\(s\)): \(6 \cdot 3 = 18\ m²\)</li>
                <li>Tiempo de exposición (\(t\)): 5 horas</li>
                <li>Rendimiento: 20%</li>
            </ul>
        </section>
        <section class="resultado">
            <h2>Resultado:</h2>
            <?php
            // Función para calcular los resultados
            function calcular_energia() {
                // Datos iniciales
                $coeficiente_radiacion = 0.9; // kCal/m²
                $superficie = 6 * 3; // m²
                $tiempo_exposicion = 5; // horas
                $rendimiento = 0.2; // 20%

                // Energía generada en kCal
                $energia_kcal = $coeficiente_radiacion * $superficie * $tiempo_exposicion * $rendimiento;

                // Conversión a kWh
                $energia_kwh = $energia_kcal / 860;

                return [
                    'energia_kcal' => $energia_kcal,
                    'energia_kwh' => $energia_kwh
                ];
            }

            // Obtener los resultados
            $resultados = calcular_energia();

            // Mostrar los resultados
            echo "<p><strong>Energía generada en kCal:</strong> " . number_format($resultados['energia_kcal'], 2) . " kCal</p>";
            echo "<p><strong>Energía generada en kWh:</strong> " . number_format($resultados['energia_kwh'], 2) . " kWh</p>";
            ?>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 4.0 SciSoft 2024
    </footer>
</section>
</body>
</html>


