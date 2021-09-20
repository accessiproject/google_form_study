<?php
/*
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
*/

$json = file_get_contents("rep.json");
$array = json_decode($json,true);
var_dump($array[36]);
$questions=[];
for ($i=0;$i<count($array);$i++) {
    echo "<h1>" . $i . " " . count($array[$i]) . "</h1>";
    for ($j=0;$j<count($array[$i]);$j++) {
        if (in_array($array[$i][$j]["question"], $questions)==false) {
            $questions[$j]=$array[$i][$j]["question"];
        }
    }
}
var_dump($questions);