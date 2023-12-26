<?php

$f = fopen('dados.txt', 'w');
$total = rand(300,4500);

for($i=0; $i<$total; $i++)
{
    if($i < $total - 1)
        fputs($f, hash("sha256", "H:K $i K:H") . PHP_EOL);
    else
        fputs($f, hash("sha256", "H:K $i K:H"));
}
fclose($f);