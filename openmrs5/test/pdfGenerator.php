<?php
require_once("../dompdf/autoload.inc.php");


function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE){
  $dompdf=new Dompdf();
  $dompdf->set_paper($paper, $orientation);
  $dompdf->load_html($html);
  $dompdf->render();
  $dompdf->stream($filename.".pdf");
}

$filename='result';
$dompdf=new  Dompdf();
$html=file_get_contents("../view.php?q=1");
pdf_create($html, $filename, 'A4', 'portrait');
?>
