<?php
  $fn = strip_tags($_POST['fn']);
  $ln = $_POST['ln'];
  $em = $_POST['em'];
  $pn = $_POST['pn'];
  $cart = $_POST['cart'];
  //echo $cart;
	$items = explode(",", $cart);
  	$fill2 = "Thanks ".$fn." ". $ln ." for your order of: <br>";
	$fill = "Thanks ".$fn." ". $ln ." for your order of: \n\r " ;

	
	$arrlength = count($items);

	$count = 0;
	$totalPrice = 0;
    for($i = 0; $i < $arrlength; $i++) {
        
      	if ($count == 6) {
         $count = 0;
        }
      if ($count == 0) {
         $fill = $fill."Quantity: ".$items[$i]." - "; 
        $fill2 = $fill2."Quantity: ".$items[$i]." - ";
        }
      if ($count == 1) {
         $fill  = $fill."Size: ".$items[$i]." - "; 
        $fill2  = $fill2."Size: ".$items[$i]." - "; 
      }
      if ($count == 2) {
        $fill = $fill."Product Name: ".$items[$i]." - "; 
        $fill2 = $fill2."Product Name: ".$items[$i]." - "; 
        }
      if ($count == 3) {
         $fill = $fill."Price: ".$items[$i]." - "; 
        $fill2 = $fill2."Price: ".$items[$i]." - "; 
        $totalPrice = $totalPrice + $items[$i];
        }
      
      if ($count == 4) {
        $fill = $fill."Color: ".$items[$i]." \n\r "; 
        $fill2 = $fill2."Color: ".$items[$i]." <br>"; 
      }
      if ($count == 5) {
        $fill = $fill."Customization: ".$items[$i]." \n\r "; 
        $fill2 = $fill2."Customization: ".$items[$i]." <br>"; 
      }
      
      	$count++;
    }

	$d = new DateTime();
	$fill = $fill."Orders over $100 must be paid for before the order is made. \n\r Pick up within one week of your order at the HHS Student Store.\n\r";
	$fill2 = $fill2."Orders over $100 must be paid for before the order is made. <br> Pick up within one week of your order at the HHS Student Store. <br>";
	$orderNum = date('YmdHis');
	$fill = $fill."Order Number: ". $orderNum."\n\r";
	$fill2 = $fill2."Order Number: ". $orderNum."<br>";
	$fill = $fill."Contact Info - Email: ". $em ." - Phone: ". $pn. " \n\r ";
	$fill2 = $fill2."Contact Info - Email: ". $em ." - Phone: ". $pn. " <br> ";
	$fill = $fill."If you did not purchase this order, please contact dawg.prints@hermiston.k12.or.us";
	
	$fill2 = $fill2."<br><br><strong>You have the option to pay by PayPal. If you choose to do so, click on the link below, then enter the total- $".$totalPrice."<br> On payment, enter your order number- ". $orderNum .".</strong>"; 
	$fill2 = $fill2.'<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">';
    $fill2 = $fill2.'<input type="hidden" name="cmd" value="_s-xclick">';
    $fill2 = $fill2.'<input type="hidden" name="hosted_button_id" value="FJX2J2CKSJATQ">';
    $fill2 = $fill2.'<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">';
    $fill2 = $fill2.'<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">';
    $fill2 = $fill2.'</form>';
	echo $fill2;

	// Pear Mail Library
    require_once "/usr/share/php/Mail.php";

    $from = '<student-webmaster@hermistonsd.org>';
    $to = '<'.$em.'>, <dawg.house@hermistonsd.org>';
    $subject = 'Thank you for ordering from Dawg the Hawse!';
    $body = $fill;

    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
            'host' => 'ssl://smtp.gmail.com',
            'port' => '465',
            'auth' => true,
            'username' => 'student-webmaster@hermistonsd.org',
            'password' => 'HermistonSD',
  			'Content-type' => "text/plain; charset=iso-8859-1\r\n\r\n"
        ));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        echo('<p>' . $mail->getMessage() . ' <strong>Please check your email to ensure it is correct and please place your order again.</strong></p>');
    } else {
        echo('<p>Order was successfully sent!</p>');
    }


?>