<?php
function rollDice($numDice, $numSides) {
    $results = [];
    for ($i = 0; $i < $numDice; $i++) {
        $results[] = rand(1, $numSides);
    }
    return $results;
}

function displayResults($results) {
    echo "ダイスの結果:\n";
    foreach ($results as $result) {
        echo "🎲 " . $result . "\n";
    }
    echo "\n合計: " . array_sum($results) . "\n";
}

// 使用例: 6面ダイスを3回振る
$numDice = 3;
$numSides = 6;

$results = rollDice($numDice, $numSides);
displayResults($results);
?>
