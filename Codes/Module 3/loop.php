<?php

for( $i=0; $i<=10;$i++){
    echo($i).PHP_EOL;
    
}

echo PHP_EOL;
$i=0;
do{
    
    echo($i).PHP_EOL;
    $i++;
}
while($i<=10);

for($i=10, $j=1; $i>0; $i--,$j++){
    echo($i.":".$j);
    echo PHP_EOL;
}