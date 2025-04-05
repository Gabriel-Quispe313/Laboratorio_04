<?php
    function calcularCirculo($radio) {
        $area = pi() * $radio * $radio;
        $perimetro = 2 * pi() * $radio;
        return ["area" => $perimetro];
    }
    print_r(calcularCirculo(5));
?>