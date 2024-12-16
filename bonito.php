<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
  <label for="tipomapa"><h1>Elige el mapa a mostrar</h1></label>

    <select name="ejercicio" id="tipomapa">
        <option value="selec">Por favor escoja una opción</option>
        <option value="O">1-Mapa Original</option>
        <option value="IU">2-Mapa con los impactos Urbanos</option>
        <option value="CC">3-Calculos Colirio</option>
        <option value="TI">4-Todos los impactos</option>
        <option value="CCo">5-Calculo de costes</option>
        <option value="MA">6-Mar afectado</option>
        <option value="R">7-Recaudación</option>
    </select>

  <input type="submit" value="Elegir">
</form>


</body>
</html>
<?php


$ejercicio = isset($_POST['ejercicio']) ? $_POST['ejercicio'] : "select";

$pomodoroHaters = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~']
];
$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

//ESCRIBE AQUÍ TU PROGRAMA PRINCIPAL

$impactosUrbanos=impactosUrbanos($pomodoroHaters, $impacts);

$colirio=colirio($impactosUrbanos);

$todoslosimpactos = todoslosimpactos ($pomodoroHaters, $impacts);

$costes = costes($todoslosimpactos);

$CalculoMar = CalculoMar($todoslosimpactos);

$recaudacion = recaudacion($CalculoMar["pescadoafectado"]);

switch($ejercicio){
    case"O":
        echo "<h1>Este es el mapa:</h1>";
        show($pomodoroHaters);break;
    case"IU":
        echo "<h1>Y este el mapa despues de recibir los impactos</h1>";
        show($impactosUrbanos);break;
    case"CC":
        echo "<h1>Ejercicio 3 (Afectados y Colirio)</h1>";
        echo "Han habido un total de $colirio[0] afectados y se necesitan $colirio[1] litros de colirio.<br>";break;
    case"TI":
        echo "<h1>Mapa con todos los impactos</h1>";
        show($todoslosimpactos);break;
    case"CCo":
        echo "<h1>Calculo de costes</h1>";
        echo"Teniendo en cuenta que cada km2 de zona no urbana cuesta 50.000€ de limpiar, y cada km2 de zona urbana cuesta 200.000€ de limpiar los costes totales ascienden a: $costes" ."€";break;
    case"MA":
        echo "<h1>Mas calculos:</h1>";
        echo 
        "<br><br>En total hay " . $CalculoMar["total"] . "Km2 de mar<br>
        El total de km2 de mar que SI que se ha visto afectado han sido:" . $CalculoMar["marsi"] .
        "<br>El total de km2 de mar que NO que se ha visto afectado han sido:" . $CalculoMar["marno"] .
        "<br> Hemos calculado que la media de pescado, la cual nos da " . $CalculoMar["mediapescado"] . " toneladas de pescado por km2
        por lo que se han visto afectadas " . $CalculoMar["pescadoafectado"] . " toneladas de pescado"
        ;break;
    case"R":
        echo "<h1>Recaudación</h1>";
        echo "<p>Dado que cada kg de pescado empleado en la elaboración del bakalao con tomate se puede vender a 5€ y contamos
        con " . $CalculoMar["pescadoafectado"] . "toneladas. La previsión de la recaudación asciende a $recaudacion" . "€</p>";
        break;
}

function recaudacion($toneladas){
    $recaudacion = $toneladas * 5000;
    return($recaudacion);
}

function CalculoMar(array $namearray){
    $marsi = 0;
    $marno = 0;
    foreach($namearray as $filas){
        foreach($filas as $km2){
            if($km2 == "~"){
                $marno ++;
            }
            elseif($km2 == "S"){
                $marsi ++;
            }
    }}
    $totalmar = $marno + $marsi;

    $totalpescado = 2000;
    $mediapescadoporKm2 = $totalpescado / $totalmar;
    $pescadoAfectdo = $mediapescadoporKm2 * $marsi;

    return[
        "marno" => $marno,
        "marsi" => $marsi, 
        "total" => $totalmar,
        "mediapescado" => $mediapescadoporKm2,
        "pescadoafectado" => $pescadoAfectdo
    ];
}

function costes($namearray){
    $costes = 0;
    foreach($namearray as $filas){
        foreach($filas as $km2){
            if($km2 == "C"){
                $costes += 200000;
            }
            elseif($km2 == "X"){
                $costes += 50000;
            }
    }}
    return($costes);
}

function todoslosimpactos (array $namearray, array $impactos){
    foreach($impactos as $xy){
        if ($namearray[$xy[0]][$xy[1]] == "A"){
            $namearray[$xy[0]][$xy[1]] = "C";}

            elseif($namearray[$xy[0]][$xy[1]] == "~"){
                $namearray[$xy[0]][$xy[1]] = "S";}

                elseif($namearray[$xy[0]][$xy[1]] == "0"){
                    $namearray[$xy[0]][$xy[1]] = "X";}
    }
    return $namearray;
}

function impactosUrbanos (array $namearray, array $impactos){
    foreach($impactos as $xy){
        if ($namearray[$xy[0]][$xy[1]] == "A"){
            $namearray[$xy[0]][$xy[1]] = "C";}
    }
    return $namearray;
}

function show(array $namearray){
    foreach($namearray as $lineas){
     foreach($lineas as $bloques){
        switch($bloques){
            case"~":
                echo "<span class='casillas' style='background-color:blue'>$bloques</span>";break;
            case"0":
                echo "<span class='casillas' style='background-color:#d86a0f'>$bloques</span>";break;
            case"A":
                echo "<span class='casillas' style='background-color:grey'>$bloques</span>";break;
            case"X":
                echo "<span class='casillas' style='background-color:black; color: white'>$bloques</span>";break;
            case"C":
                echo "<span class='casillas' style='background-color:red'>$bloques</span>";break;
            case"S":
                echo "<span class='casillas' style='background-color:#69f8fa'>$bloques</span>";break;
            }
    }echo "<br>";
    }
}

function colirio(array $namearray){
    $afectados = 0;
    foreach($namearray as $filas){
        foreach($filas as $km2){
            if($km2 == "C"){
                $afectados += 5000;
            }
        }
    }
    $litroscolirio = $afectados * 0.025;
    return[$afectados,$litroscolirio];
}

//ESCRIBE AQUÍ LA DEFINICIÓN DE LAS FUNCIONES


?>