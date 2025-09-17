<footer>
    <p>&copy; Ismael Amador Serrano.</p>
    <?php
        $dateData = [
            'days' => [
                'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'
            ],
            'months' => [
                1 => 'enero',
                2 => 'febrero',
                3 => 'marzo',
                4 => 'abril',
                5 => 'mayo',
                6 => 'junio',
                7 => 'julio',
                8 => 'agosto',
                9 => 'septiembre',
                10 => 'octubre',
                11 => 'noviembre',
                12 => 'diciembre'
            ]
        ];

        $dayOfWeek = date("w");  
        $day = date("d");
        $month = date("n");      
        $year = date("Y");

        echo $dateData['days'][$dayOfWeek] . ", " . $day . " de " . $dateData['months'][$month] . " de " . $year;
    ?>
</footer>
