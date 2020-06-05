<?php
    require_once __DIR__ . '/vendor/autoload.php';

    use Phpml\Classification\KNearestNeighbors;
    
    #use Phpml\Dataset\CsvDataset;

    #$movie=new CsvDataset('movies.csv',2);
    #$print=strval($movie);
    

    $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
    $labels = ['a', 'a', 'a', 'b', 'b', 'b'];

    $classifier = new KNearestNeighbors();
    $classifier->train($samples, $labels);
    $a=3; $b=2;
    echo $classifier->predict([$a, $b]);
?>

