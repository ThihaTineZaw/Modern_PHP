<?php

$file = __DIR__ . '/data/yangon.csv';

$handler = fopen($file,"r");

$headers = fgetcsv($handler);

$data = [];


while(($row = fgetcsv($handler)) !== false){
     $data[] = array_combine($headers, $row);
}

fclose($handler);


$collected_datas = [];

foreach($data as $item){
    if(!isset($collected_datas[substr($item['datetimeUtc'],0,10)])){
        $collected_datas[substr($item['datetimeUtc'],0,10)] = [];
    }
    $collected_datas[substr($item['datetimeUtc'],0,10)][] = [
        'AirQ' => $item['value'] ?? null,
        'Parameter' => $item['parameter'] ?? null
    ];
}

$result = [];

foreach ($collected_datas as $date => $rows) {

    foreach ($rows as $row) {

        $param = $row['Parameter'];
        $value = (float) $row['AirQ'];

        // sum
        $result[$date][$param]['sum'] = ($result[$date][$param]['sum'] ?? 0) + $value;

        // count
        $result[$date][$param]['count'] = ($result[$date][$param]['count'] ?? 0) + 1;
    }
}

foreach ($result as $date => $params) {
    foreach ($params as $param => $data) {

        $result[$date][$param] =
            $data['sum'] / $data['count'];
    }
}

ksort($result);

$labels = array_keys($result);
$pm1=[];
$pm25=[];

foreach($result as $date => $values){
    $pm1[] = $values['pm1'] ?? 0;
    $pm25[] = $values['pm25'] ?? 0;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = <?= json_encode($labels) ?>;
    const pm1 = <?= json_encode($pm1) ?>;
    const pm25 = <?= json_encode($pm25) ?>;
  new Chart(document.getElementById('myChart'), {
    type: 'line',
    data: {
        labels: labels,
        datasets: [
            {
                label: 'PM1',
                data: pm1,
                borderWidth: 2
            },
            {
                label: 'PM2.5',
                data: pm25,
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</body>
</html>