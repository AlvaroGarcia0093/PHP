<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <!-- <?php
    function sumaDosv1($num1, $num2)
    {
        return $num1 + $num2;
    }
    ;
    function sumaDosv2(int $num1, int $num2)
    {
        return $num1 + $num2;
    }
    ;
    function sumaDosv3(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }
    ;
    function sumaDosv4(int|float $num1, int|float $num2): float
    {
        return $num1 + $num2;
    }
    ;
    function divideDos(int $num1, int $num2): float
    {
        return $num1 / $num2;
    }
    function sumatorio(int $num): int
    {
        $res = 0;
        for ($i = 1; $i <= $num; $i++) {
            $res += $i;
        }
        return $res;
    }
    ;
    function factorial(int $num): int
    {
        $res = 1;
        for ($i = 1; $i <= $num; $i++) {
            $res *= $i;
        }
        return $res;
    }
    ;
   /*  function min(array $numeros) : int
    {
        $minimo_candidato = $numeros[0];
        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] < $minimo_candidato) {
                $minimo_candidato = $numeros[$i];
            }
        }
        return $minimo_candidato;
    }
 */
    function array_media(array $numeros): float
    {
        $suma_acumulada = 0;
        for ($i = 0; $i < count($numeros); $i++) {
            $suma_acumulada += $numeros[$i];
        }
        return round($suma_acumulada / count($numeros, 2));
    }
    function esPrimo(int $num): bool
    {
        $primo = true;
        for ($i = 0; $i < $num - 1; $i++) {

        }
    }

    function potensia(int $base, int $exponente)
    {
        for ($i = 0; $i <= $exponente; $i++) {
            $suma = $base * $base;
        }
        potensia(2,3);
        echo $base;
    }
    ?> -->
    <h1>Iva General</h1>
    <?php
    define("GENERAL", 21);
    define("REDUCIDO", 10);
    define("SUPERREDUCIDO", 4);

    function precioConIVA (float|int $precio, string $iva) : float {
        $precioConIVA = match($iva) {
            "GENERAL" => $precio + $precio * GENERAL/100,
            "REDUCIDO" => $precio + $precio * REDUCIDO/100,
            "SUPERREDUCIDO" => $precio + $precio * SUPERREDUCIDO/100,
            "SIN IVA" => $precio
        };
        return $precioConIVA;
    }

    function precioSinIVA (float|int $precio, string $iva) : float {
        $precioSinIVA = match($iva) {
            "GENERAL" => $precio - $precio * GENERAL/100,
            "REDUCIDO" => $precio - $precio * REDUCIDO/100,
            "SUPERREDUCIDO" => $precio - $precio * SUPERREDUCIDO/100,
            "SIN IVA" => $precio
        };
        return $precioSinIVA;
    }

    echo "<h3>" . precioConIVA(10, "REDUCIDO")."</h3";
    echo "<h3>" . precioSinIVA(10, "REDUCIDO")."</h3";
    ?>
</body>

</html>