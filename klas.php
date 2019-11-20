<?php
echo "wie zit er in de Klas?". PHP_EOL;
$klas = readline(" ");
$mensen =explode(" ", $klas);

count($mensen);
$aantal = count($mensen);

echo "De mensen in je klas zijn:";
for ($i = 0; $i <= $aantal; $i++){
    echo $mensen . PHP_EOL[$i];
}