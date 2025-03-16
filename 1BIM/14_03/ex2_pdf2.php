<?php
    $carros = [];
    $carro1 = array(
        "modelo" => "Skyline R33",
        "marca" => "Nissan",
        "link" => "https://jdm-expo.com/34292/nissan-skyline-sale.jpg"
    );

    $carro2 = array(
        "modelo" => "Integra Type R",
        "marca" => "Honda",
        "link" => "https://jdm-expo.com/43670/honda-integra-type-r-sale.jpg"
    );

    $carro3 = array(
        "modelo" => "Lancer Evolution VI",
        "marca" => "Mitsubishi",
        "link" => "https://jdm-expo.com/46175/mitsubishi-lancer-evolution-6-tme-sale.jpg"
    );

    $carro4 = array(
        "modelo" => "Supra MK4",
        "marca" => "Toyota",
        "link" => "https://jdm-expo.com/25579/toyota-supra-sale.jpg"
    );

    $carro5 = array(
        "modelo" => "RX7 Veilside",
        "marca" => "Mazda",
        "link" => "https://jdm-expo.com/46409/mazda-rx7-sale.jpg"
    );

    $carros = [$carro1, $carro2, $carro3, $carro4, $carro5];

    foreach ($carros as $carro) {
        echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>" . 
            $carro['modelo'] . "<br>" . 
            $carro['marca'] . "<br>" . 
            "<img style='width: 100%; height: auto;' src= " . $carro['link'] . "/><br>
        </div>";
    }