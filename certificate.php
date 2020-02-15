<?php



include_once './vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'tempDir' => __DIR__ . '/temp',
    'mode' => 'utf-8',
    'format' => [24, 24],
    'margin_left' => 2,
    'margin_right' => 2,
    'margin_bottom' => 2,
    'margin_top' => 2,
    'float' => 'left'

]);

// $html = '<barcode code="Your massegge here" type="QR" class="barcode" size="0.8" error="M" disableborder="1"/>';

// echo $html;

// try{
//     $mpdf->writeHTML($html);
// }catch(\Mpdf\MpdfException $e){
//     die ($e->getMessage());
// }


// $mpdf->Output();


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $all_info = $name . "<br>" . $address . "<br>" . $fname . "<br>" . $fname;
    // echo $all_info;
}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Create</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Allura|Bad+Script|Great+Vibes|Herr+Von+Muellerhoff|Italianno|Marcellus|Parisienne|Petit+Formal+Script|Pinyon+Script|Roboto|Rochester|Sacramento|Ultra&display=swap" rel="stylesheet">
</head>
<body>
<div class="frames">




<div class="certificate_body">
    <div class="certificate_sec">
     <div class="certificate_header">
        <div class="logo">

        </div>
        <div class="institution_name">
            <h2>RAJA G.C. HIGH SCHOOL</h2>
            <h4>Bondor Bazar, Sylhet</h4>
            <h4>Eiin No. 1312324134,&nbsp; Estd. - 1886</h4>
            <h5>Email: rajagchighschool.sylhet@gmail.com, &nbsp;Website: www.rggchigghschool.edu.bd</h5>
        </div>
     </div>
     <br><br>
     <div class="body_head">
         <h5 style="width: 35%;">Date: <?php echo date("Y-m-d") ?></h5>
         <h4 style="width: 28%;">TESTIMONIAL</h4>
         <h5 style="text-align: right; width: 30%;">Ref No.213213</h5>
     </div>
       
       <br><br><br>

       <div class="main_body">
            <p>
                This is certify that <span class="info" id="name"><?php echo strtoupper($name); ?>,</span> son of <span class="info"> <?php echo strtoupper($mname); ?></span> and <span class="info"><?php echo strtoupper($fname); ?> , </span>
                permanent address : <span class="info"><?php echo strtoupper($address); ?> </span> appeared at the PSC Examination-2018 as a regular examinee form <span class="info"> N/A</span> group bearing Roll No. <span class="info"> 1212312 ,</span>
                 Reg No. <span class="info"> 213123 ,</span> Session <span class="info"> 2019</span> under the Board of Intermediate and Secondary Education, Sylhet and obtained G.P.A. <span class="info"> 4.50. </span> His date of birth as per institution record is 2005-08-21.
            </p><br><br>
            <p>
                He bears a good moral character. I wish him succes in every sphere of life.
            </p><br><br><br>
       </div>




<div class="footer">

    <div class="compared">
        <p>Compared By</p>
    </div>

    <div class="middle">
            <div class="qrcode" id="qrcode"></div>
            <barcode code="Your massegge here" type="QR" class="barcode" size="0.8" error="M" disableborder="1"/>
    </div>

    <div class="head_teacher">
        <h4>mohhammed Abdul Mumith</h4>
        <p>Head Teacher</p>
    </div> 

</div>





       <!-- <div class="flex-container">
        
         -->

        <!-- <div style="float: left;">
        
        </div> -->

         
        <!-- </div>
        
        
       
</div> -->
<input type="hidden" value="<?php if (isset($all_info)) {echo $all_info;}?>" id="gn-val">


<form action="pdf.php"  method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $name; ?>" name="name">
            <input type="hidden" value="<?php echo $fname; ?>" name="fname">
            <input type="hidden" value="<?php echo $mname; ?>" name="mname">
            <input type="hidden" value="<?php echo $address; ?>" name="address">
            <input type="hidden" value="<?php echo $all_info; ?>" name="all_info">
            <input type="submit" name="submit" value="Download PDF">
       </form>


</div>
</div><br><br>
</body>
</html>


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>




<script>


// Clear Previous QR Code
$('#qrcode').empty();
$('#qrcode').qrcode({width: 50,height: 40,text: $('#gn-val').val()});

</script>







