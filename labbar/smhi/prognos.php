<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMHI 10 dagars prognos</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./smhi.css">
</head>
<body>
    <div class="box">
        <canvas id="myChart"></canvas>
        <h1>SMHI 10 dagars prognos</h1>
    
    <?php
    //$url till SMHI API
    $url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";

    /* Hämta JSON filerna */
    $json = file_get_contents($url);

    /* Avkoda JSON */
    $jsonData = json_decode($json);

    /* Publicerings tid */
    $approvedTime = $jsonData->approvedTime;
    echo "<p>Prognosen publicerades $approvedTime</p>";

    /* Plocka ut tidserien */
    $timeSeries = $jsonData->timeSeries;

    /* Skapa variabler för att samla ihop alla tidpunkter */
    /* Alla tidpunkter och temperaturer */
    $tidpunkter = "";
    $temperaturer = "";


    /* Loopa igenom en array */
    foreach ($timeSeries as $timeData) {
        //Plocka ut tidpunkten
        $validTime = $timeData->validTime;
        echo "<p>$validTime</p>";
        $tidpunkter .= "'$validTime', ";
        /* Plocka ut temperaturerna */
        $parameters = $timeData->parameters;
        $temperaturen = $parameters[10]->values[0];
        echo "$temperaturen";
        $temperaturer .= "'$temperaturen', ";
    }


    /* Skriv ut JS */
    echo "<script>";
    echo "const labels = [
        $tidpunkter
    ];
    const data = {
        labels: labels,
        datasets: [{
            label: 'Tiodagars prognos',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [$temperaturer],
            tension: 0.5 
        }]
    };
    const config = {
        type: 'line',
        data,
        options: {}
    };
    // === include 'setup' then 'config' above ===

    var myChart = new Chart(
        document.querySelector('#myChart'),
        config
    );";
    echo "</script>";
    echo "</div>";
    ?>
</body>
</html>