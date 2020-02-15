<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $all_info = $name . "<br>" . $address . "<br>" . $fname . "<br>" . $fname;
    // echo $all_info;
}

require_once __DIR__ . '/vendor/autoload.php';

// include("MPDF57/mpdf.php");

ob_start();
include "certificate.php"; 
$template = ob_get_contents();
ob_end_clean();

// $mpdf=new mPDF('','A4','','',32,25,27,25,16,13,'L'); 
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML($template);

$mpdf->Output('MyPDF.pdf', 'D');


    










// $html = "idshfuh";
// // create a new cURL resource
// $ch = curl_init();

// // set URL and other appropriate options
// curl_setopt($ch, CURLOPT_URL, "http://localhost/lab_allwork/certificate/certificate1/certificate.php");
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// // // grab URL and pass it to the browser
// curl_exec($ch);

// print_r($html);

// close cURL resource, and free up system resources
// curl_close($ch);

// $mpdf = new \Mpdf\Mpdf();

// $mpdf->useSubstitutions = true; // optional - just as an example
// $mpdf->SetHeader($url . "\n\n" . 'Page {PAGENO}');  // optional - just as an example
// $mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header
// $mpdf->WriteHTML($html);
// $mpdf->Output();