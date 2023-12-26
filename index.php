<?php

$st = microtime(true);

$total_linhas = count(file('dados.txt'));
$lines_per_file = round($total_linhas / 3);

///////////////////////////////
$input = fopen("dados.txt", "r");
$file_output_index = 1;
$line_count = 1;

while(!feof($input)){
   $line = fgets($input);
   if(empty($line)) continue;
   $output = fopen("output_". $file_output_index .".txt", "a");
   fwrite($output, $line);
   fclose($output);

   if($line_count > $lines_per_file){
      $file_output_index++;
      $line_count = 1;
   }
   $line_count++;
}

fclose($input);

// ============================
echo $total_linhas . PHP_EOL;

// ============================
$et = microtime(true);
$t = $et - $st;
printf("Executado em %f ms", $t);