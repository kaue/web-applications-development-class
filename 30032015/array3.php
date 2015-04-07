<?php
$creditos = array( "BD" => 4,
                  "LP" => 4,
                  "SO" => 3,
                  "IC" => 3,
                  "COMP" => 4,
                  "ES1" => 2,
                  "ES2" => 2,
                  "TG" => 3,
                  "IPT" => 2,
                  "EF" => 1,
                  "FG" => 2,
                  "IA" => 2,
                  "TEC1" => 3,
                  "TEC2" => 3);
$total = 0;
foreach ($creditos as $credito){
    $total += $credito;
    echo $credito . '<br>';
}
echo "Total=$total<br>"
?>