<?php
$companyType=$_POST["companyType"];
$document=$_POST["document"];
$documentType =$_POST["documentType"];
$fullName=$_POST["fullName"];
$address=$_POST["address"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$description=$_POST["description"];
$gateway=$_POST["gateway"];

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: 54esmdr0qf
$ref =  substr(str_shuffle($permitted_chars), 0, 17);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://cloud.abitmedia.com/api/payments/create-payment-request',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('companyType' => $companyType,
                                'document' => $document,
                                'documentType' => $documentType,
                                'fullName' => $fullName,
                                'address' => $address,
                                'mobile' => $mobile,
                                'email' => $email,
                                'reference' => $ref,
                                'description' => $description,
                                'amount' => '1.12',
                                'amountWithTax' => '0.56',
                                'amountWithoutTax' => '0.50',
                                'tax' => '0.06',
                                'gateway' => $gateway),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 2y-13-tx-zsjtggeehkmygjbtsf-51z5-armmnw-ihbuspjufwubv4vxok6ery7wozao3wmggnxjgyg',
    'Cookie: _csrf=a97455a48e25e29924f7df4d3335ddae173b89346361f81705c8c7eaabb3d807a%3A2%3A%7Bi%3A0%3Bs%3A5%3A%22_csrf%22%3Bi%3A1%3Bs%3A32%3A%22x1IxIBn9igZq7pfwILR6ErFvpIQXWMr-%22%3B%7D'
  ),
));

$response = curl_exec($curl);
?>
<div id="container"></div>
<script type="text/javascript">
        var x = <?php echo $response ?>;
        if(x.status=="200"){
          window.open(x.data.url, "Diseño Web", "width=700, height=600")
          var container = document.getElementById('container');
          container.innerHTML = '<h1>¡El proceso se realizo con exito!</h1>';
        }else{
          //alert(x.message)
          var container = document.getElementById('container');
          container.innerHTML = '<h1> Se ha producido un error : '+x.message+'</h1>';
        }
</script>


